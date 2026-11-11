# Nepreva website: handoff

Static HTML website for Nepreva Global Solutions. 30 pages, no build step, no external dependencies. Open `index.html` to view locally.

## 1. Publishing
1. Upload everything in this folder (except `brand-assets`, which is for reference) to the root of the web host.
2. Serve over HTTPS. Point the domain at the folder. Use `404.html` as the host's "page not found" page.
3. Replace `https://nepreva.com` in `sitemap.xml` and `robots.txt` if the live domain is different, then submit the sitemap to Google Search Console.

## 2. Forms (needs a developer)
Every form has the class `pform` and currently shows a "design preview" message without sending anything. Connect them to your proposal handler (the Laravel `ProposalRequest` / `ContactController` in your existing project) and send submissions to hello@nepreva.com.
Field names: name, email, company, country, role, svc (service), volume, cur (current team), des (desired team), systems, timeline, model (engagement model), msg.
Add spam protection and a thank-you message, and replace the preview text in the script at the bottom of each page.

## 3. Brand
- Corporate Blue #1F3A74, Refined Green #83BD42, Deep Navy #142640
- Font: Arial throughout
- Logos: colour for light backgrounds, white for dark backgrounds, black for one-colour print (see `brand-assets`). The site embeds the logos inside each page. For production, replace them with the original SVG files if available.
- Colours and spacing are defined once as CSS variables at the top of each page's style block.
- Navigation: the Services and Why Nepreva menus open on hover on desktop and on click on touch devices. Mobile uses the simple menu behind the hamburger button.

## 4. Wording rules (compliance)
- Say "audit support". Never say Nepreva delivers or performs audits.
- Audit support is performed under the client firm's methodology and review. Nepreva does not replace the auditor or engagement partner.
- Tax and CFO support is preparation and support. Advice and statutory responsibility stay with the client.
- Do not publish certifications, client names, savings percentages or statistics until verified.

## 5. Before launch checklist
- [ ] Legal counsel reviews Privacy Policy and Terms of Use, replaces every [CONFIRM] marker and removes the yellow "Draft for legal review" banner
- [ ] Confirm figures on the homepage: 25+ years, 130+ professionals, 35+ Chartered Accountants, three active markets
- [ ] Confirm leadership titles on About (Nil Saru, Durga Pd. Gnawali) and whether to add bios and photos
- [ ] Confirm the careers application email and the hiring steps on the Careers page
- [ ] Confirm whether analytics or cookies are used, then update the Privacy Policy and add a cookie notice if needed
- [ ] Connect the forms and test them end to end
- [ ] Partner review of the six Insights articles
- [ ] Decide whether Cayman Islands should be shown as an active market
- [ ] Add the homepage case study only with client permission
- [ ] Confirm the domain used in sitemap.xml
- [ ] Test on a phone and in Chrome, Safari, Edge and Firefox

## 6. Pages and SEO
| File | Title | Meta description |
|---|---|---|
| index.html | Nepreva | Global Finance & Accounting Delivery Partner | Chartered Accountant-led accounting, audit support and finance delivery for international firms and businesses. Dedicated teams, partner governance, delivered from Nepal. |
| services.html | Accounting, Audit Support & Finance Services | Nepreva | Nine service lines delivered by Chartered Accountant-led teams: accounting, reporting, audit support, tax, payroll, finance operations, FP&A, Virtual CFO and Employer of Record. |
| why-nepreva.html | Why Nepreva | A Professional Delivery Partner | Chartered Accountant-led, partner-governed and quality-controlled. See why accounting firms and finance teams choose Nepreva. |
| for-accounting-audit-firms.html | For Accounting & Audit Firms | Nepreva | Grow your practice without growing headcount. Chartered Accountant-led delivery capacity for accounting and audit firms, under your methodology and review. |
| for-businesses-finance-teams.html | For Businesses & Finance Teams | Nepreva | A finance function that scales with you: accounting, reporting, FP&A and Virtual CFO support from a Chartered Accountant-led team. |
| how-we-work.html | How We Work | Nepreva | From first conversation to a working team: how Nepreva scopes, pilots, builds and runs accounting, audit support and finance delivery. |
| 404.html | Page not found | Nepreva | Page not found. |
| about.html | About Nepreva | Independent Global Delivery Company | Nepreva Global Solutions is an independent, Chartered Accountant-led global delivery company based in Kathmandu, supported by NBSM. |
| accounting-bookkeeping.html | Accounting & Bookkeeping | Nepreva | Chartered Accountant-led accounting and bookkeeping delivery inside your systems: reconciliations, AP/AR and month-end close. |
| audit-assurance-support.html | Audit & Assurance Support | Nepreva | Chartered Accountant-led audit support for firms: workpapers, testing and documentation under your methodology and review. |
| build-your-delivery-team.html | Build Your Delivery Team | Nepreva | Share your service needs, volume, team size, systems and timeline so Nepreva can scope a realistic delivery team. |
| careers.html | Careers at Nepreva | Build a Global Accounting Career | Join Nepreva and build international accounting, audit support and finance experience under partner governance in Kathmandu. |
| contact.html | Contact Nepreva | Request a Proposal | Tell us about your accounting, audit support or finance requirements. A member of the Nepreva team replies within one business day. |
| employer-of-record-in-nepal.html | Employing in Nepal without a local entity: how Employer of Record works | Nepreva | What an Employer of Record does, who is responsible for what, when it makes sense, and what to ask a provider before you start. |
| employer-of-record.html | Employer of Record (EOR) | Nepreva | Employ talent in Nepal without a local entity. Nepreva handles contracts, payroll, benefits and statutory compliance. |
| faq.html | FAQ | Nepreva | Answers on Nepreva’s services, audit support scope, quality control, security, engagement models and Employer of Record. |
| finance-operations.html | Finance Operations | Nepreva | Scalable procure-to-pay, order-to-cash and finance administration capacity from a Chartered Accountant-led team. |
| financial-reporting.html | Financial Reporting | Nepreva | Management accounts, financial statements and board packs prepared to your templates and reviewed before delivery. |
| fpa-financial-modelling.html | FP&A & Financial Modelling | Nepreva | Budgeting, forecasting, financial modelling and management information delivered by Chartered Accountant-led teams. |
| improving-month-end-close.html | Improving month-end close: a practical guide | Nepreva | A practical guide to a calmer, faster month-end close: a calendar, cut-off discipline, early reconciliations and a short retrospective. |
| insights.html | Insights | Accounting, Audit Support & Outsourcing Perspectives | Nepreva | Practical perspectives on audit support, accounting, finance outsourcing, technology and Nepal as a professional delivery destination. |
| manage-audit-peak-season-workloads.html | How audit firms can manage peak-season workloads | Nepreva | Peak season is a timing problem as much as a capacity problem. Six practices that help audit firms protect sign-off dates without burning out their teams. |
| outsourcing-vs-offshoring.html | Outsourcing vs offshoring: what’s the difference? | Nepreva | Outsourcing and offshoring are often used as if they meant the same thing. They don’t. A plain-language guide to the four models and how to choose between them. |
| payroll.html | Payroll | Nepreva | Accurate, on-time payroll processing, statutory filing support and employee record administration. |
| privacy-policy.html | Privacy Policy | Nepreva | How Nepreva Global Solutions handles personal information collected through its website. |
| tax-compliance-support.html | Tax & Compliance Support | Nepreva | Tax return preparation, schedules and compliance documentation support, always under your review. |
| terms-of-use.html | Terms of Use | Nepreva | The terms that apply to use of the Nepreva website. |
| virtual-cfo.html | Virtual CFO | Nepreva | Senior finance capability without a full-time fixed cost: dashboards, finance planning and board reporting support. |
| what-makes-an-audit-support-partnership-work.html | What makes an audit support partnership work? | Nepreva | Seven things that separate a smooth audit support arrangement from a frustrating one, plus a checklist to run before you begin. |
| why-nepal-is-emerging-as-a-delivery-destination.html | Why Nepal is emerging as a professional services delivery destination | Nepreva | A balanced look at the strengths Nepal offers for accounting and finance delivery, the points worth weighing, and how to reduce risk. |

## 7. Updating content
The pages were generated from templates. Small text edits can be made directly in the HTML files. For larger changes (new service, new article), ask for a regenerated package so navigation, footer and sitemap stay consistent.
