<?php
/**
 * Nepreva Global Solutions - SEO, AEO & GEO Engine
 * Generates advanced metadata, Open Graph, Twitter Cards, Geo tags, and Schema.org JSON-LD structured data.
 */

$site_url = 'https://nepreva.com';
$current_script = basename($_SERVER['PHP_SELF'] ?? 'index.php');

// Canonical URL determination
if ($current_script === 'index.php' || $current_script === '') {
    $canonical_url = $site_url . '/';
    $og_type = 'website';
} else {
    $canonical_url = $site_url . '/' . $current_script;
    $og_type = 'website';
}

// Meta robots
$is_404 = ($current_script === '404.php');
$meta_robots = $is_404 ? 'noindex, nofollow' : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

// Clean text for meta tags
$clean_title = strip_tags(html_entity_decode($page_title ?? 'Nepreva | Global Finance & Accounting Delivery Partner', ENT_QUOTES, 'UTF-8'));
$clean_desc  = strip_tags(html_entity_decode($page_desc ?? 'Chartered Accountant-led accounting, audit support and finance delivery for international firms and businesses. Dedicated teams, partner governance, delivered from Nepal.', ENT_QUOTES, 'UTF-8'));
$og_image    = $site_url . '/assets/img/logo-colour.webp';

// Categorize page for AEO / GEO / Schema.org
$service_pages = [
    'accounting-bookkeeping.php' => [
        'name' => 'Accounting & Bookkeeping Services',
        'type' => 'Accounting & Bookkeeping Delivery',
        'desc' => 'Chartered Accountant-led accounting and bookkeeping delivery inside your systems: reconciliations, AP/AR and month-end close.'
    ],
    'financial-reporting.php' => [
        'name' => 'Financial Reporting Services',
        'type' => 'Financial Reporting & Management Accounts',
        'desc' => 'Management accounts, financial statements and board packs prepared to your templates and reviewed before delivery.'
    ],
    'audit-assurance-support.php' => [
        'name' => 'Audit & Assurance Support Services',
        'type' => 'Audit & Assurance Support Delivery',
        'desc' => 'Chartered Accountant-led audit support for firms: workpapers, testing and documentation under your methodology and review.'
    ],
    'tax-compliance-support.php' => [
        'name' => 'Tax & Compliance Support Services',
        'type' => 'Tax & Compliance Support Delivery',
        'desc' => 'Tax return preparation, schedules and compliance documentation support, always under your review.'
    ],
    'payroll.php' => [
        'name' => 'Payroll Processing Services',
        'type' => 'Payroll Administration & Filing Support',
        'desc' => 'Accurate, on-time payroll processing, statutory filing support and employee record administration.'
    ],
    'finance-operations.php' => [
        'name' => 'Finance Operations Delivery',
        'type' => 'Finance Operations & Administration',
        'desc' => 'Scalable procure-to-pay, order-to-cash and finance administration capacity from a Chartered Accountant-led team.'
    ],
    'fpa-financial-modelling.php' => [
        'name' => 'FP&A & Financial Modelling Services',
        'type' => 'FP&A, Budgeting & Financial Modelling',
        'desc' => 'Budgeting, forecasting, financial modelling and management information delivered by Chartered Accountant-led teams.'
    ],
    'virtual-cfo.php' => [
        'name' => 'Virtual CFO Services',
        'type' => 'Virtual CFO & Strategic Finance Support',
        'desc' => 'Senior finance capability without a full-time fixed cost: dashboards, finance planning and board reporting support.'
    ],
    'employer-of-record.php' => [
        'name' => 'Employer of Record (EOR) in Nepal',
        'type' => 'Employer of Record & Global Employment Delivery',
        'desc' => 'Employ talent in Nepal without a local entity. Nepreva handles contracts, payroll, benefits and statutory compliance.'
    ]
];

$article_pages = [
    'employer-of-record-in-nepal.php' => [
        'headline' => 'Employing in Nepal without a local entity: how Employer of Record works',
        'section' => 'Employer of Record',
        'desc' => 'What an Employer of Record does, who is responsible for what, when it makes sense, and what to ask a provider before you start.'
    ],
    'improving-month-end-close.php' => [
        'headline' => 'Improving month-end close: a practical guide',
        'section' => 'Finance Operations',
        'desc' => 'A practical guide to a calmer, faster month-end close: a calendar, cut-off discipline, early reconciliations and a short retrospective.'
    ],
    'manage-audit-peak-season-workloads.php' => [
        'headline' => 'How audit firms can manage peak-season workloads',
        'section' => 'Audit Support',
        'desc' => 'Peak season is a timing problem as much as a capacity problem. Six practices that help audit firms protect sign-off dates without burning out their teams.'
    ],
    'outsourcing-vs-offshoring.php' => [
        'headline' => 'Outsourcing vs offshoring: what’s the difference?',
        'section' => 'Strategy & Global Delivery',
        'desc' => 'A plain-language guide to the four models: onshore outsourcing, offshore outsourcing, captive offshoring and hybrid delivery.'
    ],
    'what-makes-an-audit-support-partnership-work.php' => [
        'headline' => 'What makes an audit support partnership work?',
        'section' => 'Audit Support',
        'desc' => 'Seven things that separate a smooth audit support arrangement from a frustrating one, plus a checklist to run before you begin.'
    ],
    'why-nepal-is-emerging-as-a-delivery-destination.php' => [
        'headline' => 'Why Nepal is emerging as a professional services delivery destination',
        'section' => 'Delivery Destinations',
        'desc' => 'A balanced look at the strengths Nepal offers for accounting and finance delivery, the points worth weighing, and how to reduce risk.'
    ]
];

if (isset($article_pages[$current_script])) {
    $og_type = 'article';
}

// Build Breadcrumb List
$breadcrumbs = [
    ['name' => 'Home', 'url' => $site_url . '/']
];

if (isset($service_pages[$current_script])) {
    $breadcrumbs[] = ['name' => 'Services', 'url' => $site_url . '/services.php'];
    $breadcrumbs[] = ['name' => $service_pages[$current_script]['name'], 'url' => $canonical_url];
} elseif (isset($article_pages[$current_script])) {
    $breadcrumbs[] = ['name' => 'Insights', 'url' => $site_url . '/insights.php'];
    $breadcrumbs[] = ['name' => $article_pages[$current_script]['headline'], 'url' => $canonical_url];
} elseif ($current_script !== 'index.php' && !$is_404) {
    $breadcrumbs[] = ['name' => $clean_title, 'url' => $canonical_url];
}
?>

<!-- Search Engine Optimization (SEO) -->
<meta name="robots" content="<?php echo $meta_robots; ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="author" content="Nepreva Global Solutions">
<meta name="publisher" content="Nepreva Global Solutions">

<!-- Geographic & Local Optimization (GEO) -->
<meta name="geo.region" content="NP-BA">
<meta name="geo.placename" content="Kathmandu">
<meta name="geo.position" content="27.7172;85.3240">
<meta name="ICBM" content="27.7172, 85.3240">

<!-- Open Graph (OG) / Social Media Meta Tags -->
<meta property="og:locale" content="en_US">
<meta property="og:type" content="<?php echo $og_type; ?>">
<meta property="og:site_name" content="Nepreva Global Solutions">
<meta property="og:title" content="<?php echo htmlspecialchars($clean_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($clean_desc, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo $og_image; ?>">
<meta property="og:image:width" content="640">
<meta property="og:image:height" content="140">
<meta property="og:image:alt" content="Nepreva Global Solutions">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($clean_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($clean_desc, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo $og_image; ?>">
<meta name="twitter:image:alt" content="Nepreva Global Solutions">

<!-- Structured Data (JSON-LD) for Search, AEO (Answer Engines) & Generative Search (GEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AccountingService",
      "@id": "<?php echo $site_url; ?>/#organization",
      "name": "Nepreva Global Solutions",
      "url": "<?php echo $site_url; ?>/",
      "logo": {
        "@type": "ImageObject",
        "@id": "<?php echo $site_url; ?>/#logo",
        "url": "<?php echo $og_image; ?>",
        "contentUrl": "<?php echo $og_image; ?>",
        "caption": "Nepreva Global Solutions"
      },
      "image": "<?php echo $og_image; ?>",
      "description": "Chartered Accountant-led accounting, audit support and finance delivery for international firms and businesses. Dedicated teams, partner governance, delivered from Nepal.",
      "email": "hello@nepreva.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Kathmandu",
        "addressRegion": "Bagmati",
        "addressCountry": "NP"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 27.7172,
        "longitude": 85.3240
      },
      "areaServed": [
        { "@type": "Country", "name": "United Kingdom" },
        { "@type": "Country", "name": "Canada" },
        { "@type": "Country", "name": "Australia" },
        { "@type": "Country", "name": "United Arab Emirates" },
        { "@type": "Country", "name": "United States" },
        { "@type": "GeoShape", "name": "Global" }
      ],
      "knowsAbout": [
        "Chartered Accounting",
        "Audit & Assurance Support",
        "Accounting & Bookkeeping",
        "Financial Reporting",
        "FP&A & Financial Modelling",
        "Virtual CFO Support",
        "Tax & Compliance Support",
        "Payroll Processing",
        "Employer of Record (EOR) in Nepal"
      ],
      "parentOrganization": {
        "@type": "Organization",
        "name": "NBSM",
        "description": "Independent member of Moore Global"
      }
    },
    {
      "@type": "WebSite",
      "@id": "<?php echo $site_url; ?>/#website",
      "url": "<?php echo $site_url; ?>/",
      "name": "Nepreva Global Solutions",
      "description": "Chartered Accountant-led accounting, audit support and finance delivery for international firms and businesses.",
      "publisher": {
        "@id": "<?php echo $site_url; ?>/#organization"
      },
      "inLanguage": "en"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "<?php echo $canonical_url; ?>/#breadcrumb",
      "itemListElement": [
<?php
$bc_elements = [];
foreach ($breadcrumbs as $idx => $bc) {
    $pos = $idx + 1;
    $bc_elements[] = '        {
          "@type": "ListItem",
          "position": ' . $pos . ',
          "name": ' . json_encode($bc['name'], JSON_UNESCAPED_SLASHES) . ',
          "item": "' . $bc['url'] . '"
        }';
}
echo implode(",\n", $bc_elements) . "\n";
?>
      ]
    }
<?php if (isset($service_pages[$current_script])): ?>
    ,{
      "@type": "Service",
      "@id": "<?php echo $canonical_url; ?>/#service",
      "name": <?php echo json_encode($service_pages[$current_script]['name'], JSON_UNESCAPED_SLASHES); ?>,
      "serviceType": <?php echo json_encode($service_pages[$current_script]['type'], JSON_UNESCAPED_SLASHES); ?>,
      "description": <?php echo json_encode($service_pages[$current_script]['desc'], JSON_UNESCAPED_SLASHES); ?>,
      "provider": {
        "@id": "<?php echo $site_url; ?>/#organization"
      },
      "areaServed": {
        "@type": "GeoShape",
        "name": "Global"
      }
    }
<?php elseif (isset($article_pages[$current_script])): ?>
    ,{
      "@type": "Article",
      "@id": "<?php echo $canonical_url; ?>/#article",
      "headline": <?php echo json_encode($article_pages[$current_script]['headline'], JSON_UNESCAPED_SLASHES); ?>,
      "description": <?php echo json_encode($article_pages[$current_script]['desc'], JSON_UNESCAPED_SLASHES); ?>,
      "articleSection": <?php echo json_encode($article_pages[$current_script]['section'], JSON_UNESCAPED_SLASHES); ?>,
      "inLanguage": "en",
      "publisher": {
        "@id": "<?php echo $site_url; ?>/#organization"
      },
      "author": {
        "@id": "<?php echo $site_url; ?>/#organization"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo $canonical_url; ?>"
      }
    }
<?php elseif ($current_script === 'faq.php'): ?>
    ,{
      "@type": "FAQPage",
      "@id": "<?php echo $canonical_url; ?>/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Nepreva?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nepreva Global Solutions is an independent, Chartered Accountant-led global delivery company based in Kathmandu, Nepal. It provides accounting, audit support and finance delivery for international firms and businesses."
          }
        },
        {
          "@type": "Question",
          "name": "How is Nepreva connected to NBSM?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nepreva is supported by NBSM, a Nepal-based Chartered Accountancy firm and independent member of Moore Global. That foundation gives Nepreva access to partner-level technical direction, quality assurance and established methodologies."
          }
        },
        {
          "@type": "Question",
          "name": "Which markets do you serve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We currently deliver live work in the United Kingdom, Canada and Mauritius. Australia is a planned expansion. We also work with firms and businesses in other markets where English is the working language."
          }
        },
        {
          "@type": "Question",
          "name": "Who do you work with?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Accounting and audit firms, and businesses and finance teams, that want additional delivery capacity without adding local fixed overhead."
          }
        },
        {
          "@type": "Question",
          "name": "Do you replace our auditor, adviser or finance leader?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. We work under your methodology and review structure. Professional and statutory sign-off, client relationships and advisory responsibilities always stay with your engagement team."
          }
        },
        {
          "@type": "Question",
          "name": "What do you mean by audit support?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Support activities carried out under the client firm’s methodology and review, such as preparing lead schedules, reperforming tests, matching confirmations, drafting workpapers and documenting findings. Nepreva does not perform statutory audits or issue audit opinions."
          }
        },
        {
          "@type": "Question",
          "name": "Do you give tax advice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. We provide preparation and processing support. Tax advice and statutory responsibility remain with you or your designated tax adviser."
          }
        },
        {
          "@type": "Question",
          "name": "Can you provide a dedicated team?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Engagements can be structured as a named team that works exclusively on your engagements, learns your templates and clients, and operates as an extension of your own department."
          }
        },
        {
          "@type": "Question",
          "name": "Can you scale for busy season?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Capacity can be added for peak periods and reduced afterwards, without a recruitment or redundancy cycle on your side."
          }
        },
        {
          "@type": "Question",
          "name": "How do you control quality?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every deliverable passes through preparer self-check, independent maker-checker review by a Chartered Accountant, and technical sign-off by a named partner before client hand-over."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect confidential information?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Access is role-based and scoped to each engagement, with multi-factor authentication, managed devices, isolated networks and audit logging. Work is performed in client systems wherever possible."
          }
        },
        {
          "@type": "Question",
          "name": "Do you hold security certifications?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "None are published at present. We will publish certifications only once they have been formally issued and verified by an independent accredited body."
          }
        },
        {
          "@type": "Question",
          "name": "Do you use AI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For repetitive work such as document processing and reconciliation matching, always with human review of every output before it reaches you. Client data is never used to train public models."
          }
        },
        {
          "@type": "Question",
          "name": "Can you work in our software?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Wherever practical. We work inside client-defined systems and templates, and connect through your chosen access method (such as remote desktop, VPN or browser login)."
          }
        },
        {
          "@type": "Question",
          "name": "Can we start with a small project?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Most engagements begin with a pilot on a single process or a limited scope, so both sides can confirm the working rhythm before committing to a larger arrangement."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to start?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on scope and complexity. We agree a realistic timeline during scoping. A pilot on an established process can often start within two to three weeks of final agreement."
          }
        },
        {
          "@type": "Question",
          "name": "How is pricing structured?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pricing depends on the model (dedicated team, managed service, project, peak-season or hybrid), team seniority and expected volume. We quote transparent rates with no hidden placement fees."
          }
        },
        {
          "@type": "Question",
          "name": "How do we request a proposal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Use the Build Your Delivery Team page to share your requirements, or the Contact page for a general conversation. A member of the Nepreva team replies within one business day."
          }
        },
        {
          "@type": "Question",
          "name": "What does Employer of Record cover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Compliant employment in Nepal on your behalf: contracts, payroll, benefits, statutory filing, local labor law compliance and equipment logistics, without you setting up a local entity."
          }
        },
        {
          "@type": "Question",
          "name": "Do I still manage the person day to day?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You decide the work, the objectives and the reporting line. We carry the employment relationship and handle HR administration."
          }
        }
      ]
    }
<?php endif; ?>
  ]
}
</script>
