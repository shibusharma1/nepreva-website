<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Mail\ContactMail;
use App\Models\Inquiry\CareerModel;
use App\Models\Inquiry\ContactModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AdminAppointmentMail;
use App\Models\Banners\BannerModel;
use App\Models\MultipleBanners\MultipleBannerModel;
use App\Models\Posts\PostModel;
use App\Models\Posts\AssociatedPostModel;
use App\Models\Posts\PostCategoryModel;
use App\Models\Posts\PostImageModel;
use App\Models\Posts\PostDocModel;
use App\Models\Settings\SettingModel;
use App\Models\Galleries\ImageGalleryModel;
use App\Models\Galleries\ImageGalleryCategoryModel;
use App\Models\Galleries\VideoGalleryModel;
use Mail;
use App\Mail\SendMail;
use App\Mail\SendMailContact;
use App\Mail\SendResume;
use App\Mail\CareerApply;
use App\Mail\CareerMail;
use App\Mail\PatientAppointmentMail;
use App\Models\Galleries\VideoGalleryCategoryModel;
use App\Models\Inquiry\AppointmentModel;
use App\Models\NewsLetters\NewsletterSubscriber;
use App\Models\Posts\PostTypeModel;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class FrontpageController extends Controller
{
  public function index()
  {
    $banner = BannerModel::first();
    $history = PostModel::where('post_type', 1)->where('post_parent', 82)->orderBy('post_order')->get();
    $specialitiesheading = PostModel::where('id', 104)->first();
    $specialities = PostModel::where('post_type', 15)->where('post_parent', 104)->orderBy('post_order')->get();
    $whyciwecheading = PostModel::where('id', 105)->first();
    $whyciwec = PostModel::where('post_type', 15)->where('post_parent', 105)->orderBy('post_order')->get();
    $leftCards = $whyciwec->take(3);
    $rightCards = $whyciwec->slice(3, 3);
    $trustedworldwide =  PostModel::where('id', 106)->first();
    $whatsnewheading = PostModel::find(107);
    $whatsnewcards = PostModel::where('post_type', 15)->where('post_parent', 107)->orderBy('post_order')->take(5)->get();
    $featuredCard = $whatsnewcards->first();
    $smallCards = $whatsnewcards->slice(1, 4);
    $doctorssection = PostModel::where('id', 129)->first();
    $ktmdoctors = PostModel::where('post_type', 2)->where('post_parent', 45)->where('icon', 'Kathmandu')->first();
    $pkhdoctors = PostModel::where('post_type', 2)->where('post_parent', 45)->where('icon', 'Pokhara')->first();
    $patientStoriesHeading = PostModel::where('id', 130)->first();
    $patientStories = PostModel::where('post_type', 15)->where('post_parent', 130)->orderBy('post_order')->get();
    $testimonialheading = PostModel::where('id', 136)->first();
    $testimonials = PostModel::where('post_type', 15)->where('post_parent', 136)->orderBy('post_order')->get();
    $awardheading = PostModel::where('id', 142)->first();
    $awards = PostModel::where('post_type', 15)->where('post_parent', 142)->orderBy('post_order')->get();
    $publications = PostModel::with('documents')->where('id', 148)->first();
    // dd($publications);

    return view('themes.default.frontpage', compact('banner', 'history', 'specialitiesheading', 'specialities', 'whyciwecheading', 'whyciwec', 'leftCards', 'rightCards', 'trustedworldwide', 'whatsnewheading', 'whatsnewcards', 'featuredCard', 'smallCards', 'doctorssection', 'ktmdoctors', 'pkhdoctors', 'patientStories', 'patientStoriesHeading', 'testimonialheading', 'testimonials', 'awardheading', 'awards', 'publications'));
  }

  public function search(Request $request)
  {
    $request->validate([
      'q' => 'required|string|min:2|max:100',
    ]);

    $search = trim($request->input('q'));

    $results = PostModel::query()
      ->with('documents')
      ->where('post_type', 2)
      ->whereIn('post_parent', [26, 27, 28, 29, 45])
      ->where('status', '1')
      ->where('published', '1')
      ->where('is_active', '1')
      ->where('is_draft', '0')
      ->where('is_trashed', '0')
      ->where(function ($query) use ($search) {
        $query->where('post_title', 'LIKE', "%{$search}%")
          ->orWhere('sub_title', 'LIKE', "%{$search}%")
          ->orWhere('post_excerpt', 'LIKE', "%{$search}%")
          ->orWhere('post_content', 'LIKE', "%{$search}%")
          ->orWhere('post_tags', 'LIKE', "%{$search}%")
          ->orWhere('meta_keyword', 'LIKE', "%{$search}%")
          ->orWhere('meta_description', 'LIKE', "%{$search}%");
      })
      ->orderByRaw("
            CASE
                WHEN post_title = ? THEN 1
                WHEN post_title LIKE ? THEN 2
                WHEN post_title LIKE ? THEN 3
                WHEN sub_title LIKE ? THEN 4
                ELSE 5
            END
        ", [
        $search,
        "{$search}%",
        "%{$search}%",
        "%{$search}%"
      ])
      ->orderBy('post_order')
      ->paginate(10)
      ->withQueryString();
    return view('themes.default.search-results', compact('results', 'search'));
  }

  public function posttype($uri)
  {
    if (!check_posttype_uri($uri)) {
      abort(404);
    }
    $setting = SettingModel::where('id', 1)->first();
    $data = PostTypeModel::where('uri', $uri)->first();
    $tmpl['template'] = 'page';
    if ($tmpl['template']) {
      $data['template'] = $data['template'];
    }
    if ($data) {
      $posts = PostModel::where('post_type', $data->id)->with('associatePosts')->orderBy('post_order', 'asc')->paginate(6);
    }
    $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();

    $publications = collect();
    $healthinformation = collect();
    if ($data->uri == 'research-publication') {
      $publications = PostModel::with('documents')->where('post_type', $data->id)
        ->orderBy('post_order')
        ->get();
    }

    if ($data->uri == 'health-information') {
      $healthinformation = PostModel::with('documents')->where('post_type', $data->id)
        ->orderBy('post_order')
        ->get();
    }

    return view('themes.default.' . $data['template'] . '', compact('data', 'documents', 'posts', 'setting', 'publications', 'healthinformation'));
  }

  public function pagedetail($uri)
  {
    
    if (!check_uri($uri)) {
      abort(404);
    }
    $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
    $tmpl['template'] = 'single';
    if ($tmpl['template']) {
      $data['template'] = $data['template'];
    }

    if ($data->id) {
      $data->visiter = $data->visiter + 1;
      $data->save();
    }

    $pos_type = PostTypeModel::where('id', $data->post_type)->first();
    $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
    if ($data && $data->post_parent == '0') {
      $data_child = PostModel::where('post_parent', $data['id'])->with('associatePosts')->orderBy('post_order', 'asc')->get();
      $associated_posts = AssociatedPostModel::whereIn('post_id', $data_child->pluck('id'))->paginate(8);
    } else {
      $data_child = PostModel::where('post_type', $data->post_type)->where('post_parent', $data['post_parent'])->with('associatePosts')->orderBy('id', 'asc')->get();
      $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->paginate(8);
    }
    $related_posts = PostModel::where('post_type', $data->post_type)->where('id', '!=', $data['id'])->orderBy('id', 'asc')->get();
    $multiphotos = $data->images()->orderBy('created_at', 'desc')->paginate(6);
    $categories = collect();
    $galleries = collect();
    $videoCategories = collect();
    $videos = collect();
    $services = collect();
    $doctors = collect();
    $specialities = collect();
    $expertcare = collect();
    $healthguide = collect();
    $travelguide = collect();
    $faq = collect();
    $altitudesection = collect();
    $aboutsection = collect();
    $missionvisionvalue = collect();
    $historyheading = collect();
    $history = collect();
    $historicalgalleryheading = collect();
    $historicalgallery = collect();
    $foundersheading = collect();
    $founders = collect();
    $csrhero = collect();
    $csrfeaturedheading = collect();
    $csrfeatured = collect();
    $featuredstory = collect();

    if ($data->uri === 'gallery') {
      $categories = ImageGalleryCategoryModel::whereHas('galleries')->orderBy('created_at')->get();
      $galleries = ImageGalleryModel::with('category')->orderBy('created_at', 'DESC')->get();
      $videoCategories = VideoGalleryCategoryModel::orderBy('category')->get();
      $videos = VideoGalleryModel::with('category')->latest()->get();
    }
    
    if ($data->uri == 'healthcare-services') {
      $services = PostModel::with('documents')->where('post_type', $data->post_type)->orderBy('post_order')->get();
    }

    if ($data->uri == "doctors-at-ciwec") {
      $doctors = PostModel::where('post_type', 2)->where('post_parent', 45)->orderBy('post_order')->get();
      $specialities = PostModel::where('post_type', 2)->where('post_parent', 46)->orderBy('post_order')->get();
      $expertcare = PostModel::where('id', 57)->where('post_type', 2)->where('post_parent', 27)->orderBy('post_order')->first();
    }

    if ($data->uri == "family-medicine-health-screening") {
      $healthguide = PostModel::with('documents')->where('post_type', 2)->where('post_parent', 62)->orderBy('post_order')->get();
      $travelguide = PostModel::with('documents')->where('post_type', 2)->where('post_parent', 63)->orderBy('post_order')->first();
      $faq = PostModel::where('post_type', 2)->where('post_parent', 65)->orderBy('post_order')->get();
    }

    if ($data->uri == "altitude-illness-frostbite") {
      $altitudesection = PostModel::with('documents')->where('post_type', 2)->where('post_parent', 29)->orderBy('post_order')->get();
    }

    if ($data->uri == "about-us") {
      $aboutsection = PostModel::where('post_type', 1)->where('post_parent', 17)->orderBy('post_order')->get();
      $missionvisionvalue = PostModel::where('post_type', 1)->where('post_parent', 77)->orderBy('post_order')->get();
    }

    if ($data->uri == "ciwec-history") {
      $historyheading = PostModel::where('id', 82)->first();
      $history = PostModel::where('post_type', 1)->where('post_parent', 82)->orderBy('post_order')->get();
      $historicalgalleryheading = PostModel::where('id', 87)->first();
      $historicalgallery = PostModel::where('post_type', 1)->where('post_parent', 87)->orderBy('post_order')->get();
      $foundersheading = PostModel::where('id', 94)->first();
      $founders = PostModel::where('post_type', 1)->where('post_parent', 94)->orderBy('post_order')->get();
    }

    if ($data->uri == "ciwec-csr") {
      $csrhero = PostModel::where('id', 96)->first();
      $csrfeaturedheading = PostModel::where('id', 97)->first();
      $csrfeatured = PostModel::where('post_type', 1)->where('post_parent', 97)->orderBy('post_order')->get();
      $featuredstory = PostModel::where('id', 98)->first();
    }
  
    return view('themes.default.' . $data['template'] . '', compact('data', 'data_child', 'associated_posts', 'documents', 'pos_type', 'related_posts', 'multiphotos', 'categories', 'galleries', 'videoCategories', 'videos', 'services', 'doctors', 'specialities', 'expertcare', 'healthguide', 'travelguide', 'faq', 'altitudesection', 'aboutsection', 'missionvisionvalue', 'historyheading', 'history', 'historicalgalleryheading', 'historicalgallery', 'foundersheading', 'founders', 'csrhero', 'csrfeaturedheading', 'csrfeatured', 'featuredstory'));
  }

  public function product_detail($uri)
  {
    $data = AssociatedPostModel::where('uri', $uri)->first();
    $post = PostModel::where('id', $data->post_id)->with('associatePosts')->first();
    $related = AssociatedPostModel::where('post_id', $post->id)->where('id', '!=', $data->id)->get();
    // dd('test',$data,$post);
    return view('themes.default.productdetail', compact('data', 'post', 'related'));
  }

  public function pagedetail_child($parenturi, $uri)
  {
    $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();

    $tmpl['template'] = 'single';
    if ($tmpl['template']) {
      $data['template'] = $data['template'];
    }

    if ($data->id) {
      $data->visiter = $data->visiter + 1;
      $data->save();
    }

    $data_child = PostModel::where('id', $data['post_parent'])->first();
    if ($data_child) {
      $data['template'] = $data_child['template_child'];
    }
    $associated_posts = array();
    if ($data) {
      $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
    }
    $post_id = $data->id;
    $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
    $pos_type = PostTypeModel::where('id', $data->post_type)->first();

    // dd($data['template']);
    return view('themes.default.' . $data['template'] . '', compact('data', 'data_child', 'associated_posts', 'documents', 'pos_type'));
  }

  public function servicetype($category_uri)
  {
    $category = PostCategoryModel::where('uri', $category_uri)->first();
    if ($category) {
      $data = PostModel::where('post_category', $category->id)->orderBy('post_order', 'desc')->get();
      return view('themes.default.service-list', compact('data', 'category'));
    }
    return false;
  }

  public function apply($parenturi, $uri)
  {
    $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
    if ($data) {
      return view('themes.default.apply', compact('data'));
    }
  }

  public function navigation($uri)
  {
    $getId = PostModel::where(['uri' => $uri])->first();
    $childCount = PostModel::where(['post_parent' => $getId->id])->count();
    if ($childCount > 0) {
      $parent_post = PostModel::where('uri', $uri)->first();
      $post = PostModel::where(['post_parent' => intval($getId->id)])->orderBy('post_order', 'asc')->paginate(15);
      $template = $parent_post->template;
    } else {
      $parent_post = PostModel::where('uri', $uri)->first();
      $post = PostModel::where('uri', $uri)->first();
      $template = $post->template;
      $news_updates = PostModel::where(['post_type' => 9])->orderBy('post_order', 'asc')->paginate(15);
    }
    $bod = PostModel::where(['post_type' => 12])->get();
    return view('themes.default.' . $template . '', compact('post', 'bod', 'parent_post', 'news_updates'));
  }

  public function category_navigation($uri)
  {
    $post_category = PostCategoryModel::where('uri', trim($uri))->first();
    if ($post_category->id == 2) {
      $data =  PostModel::where(['post_category' => $post_category->id])->orderBy('post_order', 'asc')->paginate(15);
      return view('themes.default.completed', compact('data', 'post_category'));
    } else {
      $data =  PostModel::where(['post_category' => $post_category->id])->orderBy('post_order', 'asc')->paginate(15);
      return view('themes.default.ongoing', compact('data', 'post_category'));
    }
  }

  /***********************************
   ******** Root Navigation ***********
   ************************************/

  public function photo_gallery($cat_id)
  {
    $data = ImageGalleryModel::where(['category_id' => $cat_id])->get();
    $cat = ImageGalleryCategoryModel::where(['id' => $cat_id])->first();
    return view('themes.default.photo_gallery_thumbnail', compact('data', 'cat'));
  }

  public function sendmail()
  {
    $data = SettingModel::where('id', 1)->first();
    Mail::to($data->email_primary)->send(new SendMail());
    return redirect()->back()->with('message', 'Contact message successfully sent.');
  }

  public function sendmail_contact_appointment(Request $request)
  {
    // dd($request->all());
    $g_recaptcha_response = $request->input('g_recaptcha_response');
    $result = $this->getCaptcha($g_recaptcha_response);
    if ($result->success == true && $result->score > 0.5) {
      try {
        $request->validate([
          'request_type'      => 'required|string|max:100',
          'name'              => 'required|string|max:255',
          'email'             => 'required|email:rfc,dns|max:255',
          'phone'             => 'required|string|max:30',
          'nationality'       => 'nullable|string|max:100',
          'location'          => 'required|in:Kathmandu,Pokhara',
          'department'        => 'nullable|string|max:255',
          'appointment_date'  => 'required|date|after_or_equal:today',
          'appointment_time'  => 'required|date_format:H:i',
          'message'           => 'nullable|string|max:2000',
          'terms'             => 'accepted',
        ]);


        if ($request->appointment_date === now()->toDateString()) {

          $selectedDateTime = Carbon::parse(
            $request->appointment_date . ' ' . $request->appointment_time
          );

          if ($selectedDateTime->isPast()) {

            return back()
              ->withInput()
              ->with([
                'error' => true,
                'message' => 'Please choose a future time.'
              ]);
          }
        }

        $opening = Carbon::createFromTime(9, 0);
        $closing = Carbon::createFromTime(19, 0);

        $selectedTime = Carbon::createFromFormat('H:i', $request->appointment_time);

        if ($selectedTime->lt($opening) || $selectedTime->gt($closing)) {

          return back()
            ->withInput()
            ->with([
              'error' => true,
              'message' => 'Appointments are available only between 9:00 AM and 7:00 PM.'
            ]);
        }

        $appointmentExists = AppointmentModel::whereDate('appointment_date', $request->appointment_date)
          ->whereTime('appointment_time', $request->appointment_time)
          ->where('location', $request->location)
          ->exists();

        if ($appointmentExists) {
          return back()
            ->withInput()
            ->with([
              'error' => true,
              'message' => 'This time slot has already been booked for the selected location.'
            ]);
        }

        if ($request->isMethod('post')) {
          $appointment = AppointmentModel::create([
            'request_type'      => $request->request_type,
            'full_name'         => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'country'           => $request->nationality,
            'location'          => $request->location,
            'service'           => $request->department,
            'appointment_date'  => $request->appointment_date,
            'appointment_time'  => $request->appointment_time,
            'message'           => $request->message,
            'status'            => 'Pending',
          ]);

          Mail::to($appointment->email)
            ->queue(new PatientAppointmentMail($appointment));
          $setting = SettingModel::where('id', 1)->first();
          $adminEmail = $request->location === 'Kathmandu'
            ? $setting->email_primary
            : $setting->email_secondary;

          Log::info('admin email as per lovation is :', [$adminEmail]);

          Mail::to($adminEmail)
            ->queue(new PatientAppointmentMail($appointment));
          // Log:info([]);
          $adminEmail = "ss02001135@gmail.com";

          Mail::to($adminEmail)
            ->queue(new AdminAppointmentMail($appointment));
          // }

          $message = "Thank you for your appointment request. Our healthcare team will review your request and contact you shortly.";
          return view(
            'themes.default.inquiry-success',
            [
              'message' => $message,
              'name' => $appointment->full_name,
            ]
          );
        }
      } catch (ValidationException $e) {
        return redirect()->back()->with([
          'error' => true,
          'message' => $e->validator->errors()->all()
        ]);
      } catch (Exception $e) {
        return redirect()->back()->with([
          'error' => true,
          'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
        ]);
      }
    } else {
      return redirect()->back()->with([
        'error' => true,
        'message' => 'You are Robot.'
      ]);
    }
  }

  public function sendmail_contact(Request $request)
  {
    // dd($request->all());
    $g_recaptcha_response = $request->input('g_recaptcha_response');
    $result = $this->getCaptcha($g_recaptcha_response);
    if ($result->success == true) {
      try {
        $request->validate([
          'full_name' => 'required|string|max:255',
          // 'lname' => 'required|string|max:255',
          'phone' => 'required|string|max:255',
          'email' => 'required|email',
          'subject' => 'nullable|string|max:255',
          'message' => 'nullable|string|max:255',
        ]);

        if ($request->isMethod('post')) {
          $contact = ContactModel::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'number' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            // 'country' => $request->lname,
          ]);
          // return new ContactMail();
          // Mail::to($request->email)->send(new ContactMail());
          $setting = SettingModel::where('id', 1)->first();
          Log::info('Setting email', [$setting->email_primary]);
          $adminEmail = "ss02001135@gmail.com";

          Mail::to($adminEmail)
            ->queue(new ContactMail($contact));

          $name = $request->full_name;
          $message = "<p>Thank you for contacting us. One of our team will be in touch with you soon.</p>";
          return view('themes.default.inquiry-success', compact('message', 'name'));
        }
      } catch (ValidationException $e) {
        return redirect()->back()->with([
          'error' => true,
          'message' => $e->validator->errors()->all()
        ]);
      } catch (Exception $e) {
        return redirect()->back()->with([
          'error' => true,
          'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
        ]);
      }
    } else {
      return redirect()->back()->with([
        'error' => true,
        'message' => 'You are Robot.'
      ]);
    }
  }

  public function sendmail_resume(Request $request)
  {
    // dd('test',$request->all());
    $g_recaptcha_response = $request->input('g_recaptcha_response');
    $result = $this->getCaptcha($g_recaptcha_response);
    if ($result->success == true) {
      try {
        $request->validate([
          'position' => 'required|exists:cl_posts,id',
          'name' => 'required|string|max:255',
          'phone' => 'required|string|max:20',
          'email' => 'required|email|max:255',
          'experience' => 'required|numeric|min:0',
          'ctc' => 'required|string',
          'organization' => 'required|string|max:255',
          'cv' => 'required|mimes:doc,docx,pdf|max:2048',
          'cover' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);

        $position = PostModel::where('id', $request->position)->first();
        $cvFile = $request->file('cv');
        $cvName = time() . '-' . $cvFile->getClientOriginalName();
        $cvFile->move(public_path('uploads/cv'), $cvName);

        $coverFile = $request->file('cover');
        $coverName = time() . '-' . $coverFile->getClientOriginalName();
        $coverFile->move(public_path('uploads/coverletter'), $coverName);
        $create = CareerModel::create([
          'fname'    => $request->name,
          'lname'    => $request->last_name,
          'email'    => $request->email,
          'number'   => $request->phone,
          'message'  => $request->experience,
          'cv'       => $cvName,
          'cover'    => $coverName,
          'subject'  => $request->ctc,
          'country'  => $request->organization,
          'position' => $position->post_title,
        ]);
        return new CareerMail();
        // Mail::to($request->email)->send(new CareerMail());
        $name = $request->name;
        $message = "<p>Thank you for applying. One of our team will be in touch with you soon.</p>";

        return view('themes.default.inquiry-success', compact('message', 'name'));

        // return redirect('/')->with([
        //     'success' => true,
        //     'message' => 'Quotation Sent Successfully. One of our member will contact you soon.'
        // ]);
      } catch (ValidationException $e) {
        return redirect()->back()->with([
          'error' => true,
          'message' => $e->validator->errors()->all()
        ]);
      } catch (Exception $e) {
        return redirect()->back()->with([
          'error' => true,
          'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
        ]);
      }
    } else {
      return redirect()->back()->with([
        'error' => true,
        'message' => 'You are Robot.'
      ]);
    }
  }

  // public function sendmail_resume(Request $request)
  // {
  //   try{
  //     $g_recaptcha_response = $request->input('g_recaptcha_response2');
  //     $result = $this->getCaptcha($g_recaptcha_response);

  //     if ($result->success == true) {
  //       // dd($request->all());
  //         $validated = $request->validate([
  //           'position' => 'required|exists:posts,id',
  //           'name' => 'required|string|max:255',
  //           'phone' => 'required|string|max:20',
  //           'email' => 'required|email|max:255',
  //           'experience' => 'required|numeric|min:0',
  //           'ctc' => 'required|string',
  //           'organization' => 'required|string|max:255',
  //           'cv' => 'required|mimes:doc,docx,pdf|max:2048',
  //           'cover' => 'required|mimes:doc,docx,pdf|max:2048'
  //         ]);

  //         $cvFile = $request->file('cv');
  //         $cvName = time() . '-' . $cvFile->getClientOriginalName();
  //         $cvFile->move(public_path('uploads/cv'), $cvName);

  //         $coverFile = $request->file('cover');
  //         $coverName = time() . '-' . $coverFile->getClientOriginalName();
  //         $coverFile->move(public_path('uploads/coverletter'), $coverName);
  //         $create = CareerModel::create([
  //             'fname'    => $request->name,
  //             'lname'    => $request->last_name,
  //             'email'    => $request->email,
  //             'number'   => $request->phone,
  //             'message'  => $request->experience,
  //             'cv'       => $cvName,
  //             'cover'    => $coverName,
  //             'subject'  => $request->ctc,
  //             'country'  => $request->organization,
  //             'position' => $request->position,
  //         ]);
  //         // return new CareerMail();
  //         $name = $request->name;
  //         $message = "<p>Thanks for applying. One of our team will be in touch with you soon.</p>";

  //         return view('themes.default.inquiry-success', compact('message', 'name'));
  //     } else {
  //         return back()->with(['error'=> true,
  //         'message'=>'Please try again']);
  //     }
  //   }catch(Exception $e){
  //     return back()->with(['error'=> true,
  //         'message'=> $e->getMessage() ]);
  //   }
  // }


  private function getCaptcha($Secretkey)
  {
    $secret = env('SECRET_KEY');
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$Secretkey}");
    $return = json_decode($response);
    return $return;
  }

  public function career_navigation(Request $request)
  {
    $data['career_title'] = $request->input('post_title');
    return view('themes.default.apply', $data);
  }

  public function career_apply()
  {
    $data['career_title'] = request()->segment(3);
    return view('themes.default.apply', $data);
  }

  public function career_apply_action()
  {
    $data = SettingModel::where('id', 1)->first();
    Mail::to($data->email_primary)->send(new CareerApply());
    return redirect()->back()->with('message', 'Successfully Applied.');
  }

  public function postby_category($id)
  {
    $post_category = PostCategoryModel::where(['id' => $id])->first();
    $data = PostModel::where(['post_category' => $id])->paginate(20);
    if ($data) {
      return view('themes.default.postbycategory', compact('data', 'post_category'));
    }
    return false;
  }

  public function postby_parent($id)
  {
    $childCount = PostModel::where(['post_parent' => $id])->count();
    if ($childCount > 0) {
      $parent_post = PostModel::where('post_parent', $id)->first();
      $post = PostModel::where(['post_parent' => intval($id)])->orderBy('post_order', 'asc')->paginate(15);
      return view('themes.default.template-project-list', compact('post', 'parent_post'));
    }
    return false;
  }

  //News letter subscriber
  public function newsletter(Request $request)
  {
    $g_recaptcha_response = $request->input('g_recaptcha_response');
    $result = $this->getCaptcha($g_recaptcha_response);
    if ($result->success == true && $result->score > 0.5) {
      try {
        $validator = Validator::make($request->all(), [
          // 'name' => 'required|string|max:255',
          'email' => 'required|email|max:255',
        ]);
        if ($validator->fails()) {

          return back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Please check the form fields.');
        }
        $existingSubscriber = NewsletterSubscriber::where('email', $request->email)
          ->first();
        Log::info($existingSubscriber);
        if ($existingSubscriber) {
          return back()
            ->withInput()
            ->with('message', 'You are already subscribed.');
        }
        $newslettersubscriber = new NewsletterSubscriber();
        // $newslettersubscriber->name = $request->name;
        $newslettersubscriber->email = $request->email;
        $newslettersubscriber->subscribed_at = now();
        $newslettersubscriber->save();
        return back()->with('success', 'Successfully subscribed to our newsletter.');
      } catch (\Exception $e) {
        Log::info($e);
        return back()
          ->withInput()
          ->with('error', 'Unable to process your request right now.');
      }
    } else {
      return back()->with('error', 'You are Robot.');
    }
  }
}
