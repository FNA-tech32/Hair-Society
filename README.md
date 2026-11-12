# Hair Society — Luxury Salon & Barber Shop Website

![Hair Society Brand Banner](img/slide-1.jpg)

**Hair Society** is a premier, multi-page luxury hair salon and barbershop website template. Tailored for high-end grooming establishments, beauty salons, and modern barbershops, it combines timeless elegance, bronze-and-charcoal styling, responsive layouts, interactive booking features, and comprehensive contact options.

---

## 📌 Project Overview

- **Brand Name**: **Hair Society**
- **Industry**: Luxury Hair Salon, Barber Shop & Grooming Lounge
- **Established**: 1991
- **Color Scheme**: Warm Bronze (`#9E8A78`), Charcoal/Dark Slate (`#222227`), and Soft Cream (`#FCF9F5`)
- **Typography**: Prata (Luxury Serif Headers), Lato & Work Sans (Modern Sans-serif Body)

---

## 📞 Official Contact & Alternative Details

All contact touchpoints across the website (headers, dedicated contact page, appointment forms, and global footers) have been configured with both primary and alternative contact details:

| Contact Method | Primary Details | Alternative Details | Notes |
|---|---|---|---|
| **Studio Address** | `452 Broadway, Suite 300, New York, NY 10013, USA` | — | Embedded in interactive Google Map |
| **Email Address** | [`info@hairsociety.com`](mailto:info@hairsociety.com) | [`booking@hairsociety.com`](mailto:booking@hairsociety.com) | Clickable `mailto:` links across all pages |
| **Phone Number** | [`+1 (212) 555-0198`](tel:+12125550198) | [`+1 (212) 555-0199`](tel:+12125550199) | Clickable `tel:` links for instant dialing |
| **Operating Hours** | **Mon – Fri:** 9:00 AM – 8:00 PM | **Sat:** 9:00 AM – 7:00 PM<br>**Sun:** 10:00 AM – 6:00 PM | VIP after-hours sessions by appointment |

---

## 🌐 Website Pages Directory

The template includes **17 fully responsive HTML5 pages**:

### 🏠 Home Variations
- [`index.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/index.html) — **Home Default**: Full hero slider, about showcase, services preview, appointment booking, price list, barbers, reviews, and latest news.
- [`index-2.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/index-2.html) — **Home Alternative**: Alternate hero layout and service carousel.
- [`index-3.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/index-3.html) — **Home Modern**: Modern grid styling with compact section hierarchy.
- [`index-4.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/index-4.html) — **Home Classic**: Classic video background hero using YTPlayer.

### 🏢 About Pages
- [`about-us.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/about-us.html) — The story of Hair Society, heritage since 1991, mission, master stylists, and facility tour.
- [`about-company.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/about-company.html) — Corporate salon profile, executive barbers, craft values, and partner sponsors.

### ✂️ Services & Pricing
- [`services.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/services.html) — Service Style 1: Card layout with detailed haircut, shave, color, and treatment descriptions.
- [`services-2.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/services-2.html) — Service Style 2: Alternating media blocks with pricing highlights.
- [`pricing.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/pricing.html) — Comprehensive price menu categorized by haircutting, styling, beard grooming, and spa packages.

### 📅 Booking & Engagement
- [`appointment.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/appointment.html) — Dedicated appointment booking page with stylist selection, date/time picker, and AJAX processor.
- [`gallery.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/gallery.html) — Filterable lookbook portfolio with VenoBox lightbox integration.
- [`team.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/team.html) — Master barbers, colorists, and stylists with individual specialties and social links.
- [`contact.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/contact.html) — Interactive Google Map, primary & alternative contact directory, and AJAX contact form.

### 📰 Blog & Media
- [`blog-grid.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/blog-grid.html) — Multi-column grooming advice and lifestyle editorial grid.
- [`blog-classic.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/blog-classic.html) — Classic long-form blog feed with sidebar widgets, search, tags, and categories.
- [`blog-single.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/blog-single.html) — Detailed article view with author bio, navigation, comments, and reply form.

### ⚠️ System Pages
- [`404.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/404.html) — Branded error 404 page with navigation redirect links.

---

## 📁 Project Structure

```text
Hair-Society/
├── 404.html               # 404 Error page
├── about-company.html     # About company & history
├── about-us.html          # About us & story
├── appointment.html       # Appointment booking page
├── appointment.php        # PHP appointment submission handler
├── blog-classic.html      # Classic blog layout
├── blog-grid.html         # Grid blog layout
├── blog-single.html       # Single blog post
├── contact.html           # Contact details & form
├── contact.php            # PHP contact form handler
├── gallery.html           # Portfolio / lookbook gallery
├── index-2.html           # Home page variant 2
├── index-3.html           # Home page variant 3
├── index-4.html           # Home page variant 4 (Video hero)
├── index.html             # Main home page
├── pricing.html           # Pricing table & service costs
├── services-2.html        # Services layout 2
├── services.html          # Services layout 1
├── team.html              # Barbers & stylists team
├── README.md              # Project documentation
│
├── css/                   # Stylesheets
│   ├── animate.min.css         # CSS animations
│   ├── barber-icons.css        # Specialized barber font glyphs
│   ├── bootstrap.min.css       # Bootstrap 4 framework
│   ├── elegant-font-icons.css  # Elegant font icons
│   ├── elegant-line-icons.css  # Line icon collection
│   ├── main.css                # Primary website theme styling
│   ├── nice-select.css         # Dropdown select styling
│   ├── owl.carousel.css        # Carousel slider styling
│   ├── responsive.css          # Mobile & tablet media queries
│   ├── slicknav.min.css        # Responsive mobile menu
│   ├── themify-icons.css       # Themify UI icons
│   └── venobox/                # Lightbox modal stylesheets & assets
│
├── fonts/                 # Web font icon files (EOT, SVG, TTF, WOFF)
├── img/                   # Graphics, banners, barber photos, logos
│   ├── logo.png           # Hair Society official logo (transparent PNG)
│   ├── logo.svg           # Hair Society scalable vector logo
│   └── ...
└── js/                    # Client-side scripts
    ├── appointment.js          # AJAX handler for appointment bookings
    ├── contact.js              # AJAX handler for contact inquiries
    ├── main.js                 # Carousel init, sticky nav, smooth scroll
    └── vendor/                 # jQuery 1.12.4, Bootstrap, Owl Carousel, WOW, VenoBox
```

---

## ⚡ Getting Started & Local Development

This is a static web application with optional PHP backend handlers for form processing.

### Option 1: Static Live Preview (Any Browser)
Double-click `index.html` or open it with your browser of choice (Chrome, Edge, Firefox, Safari).

### Option 2: Local HTTP Server (Node.js)
```bash
# Serve current directory on port 3000
npx serve .
# or
npx http-server -p 8080
```
Open [http://localhost:3000](http://localhost:3000) in your browser.

### Option 3: Full PHP Development Server (Enables Contact & Booking Forms)
```bash
php -S localhost:8000
```
Open [http://localhost:8000](http://localhost:8000) to test:
- Contact form submission (`contact.html` -> `contact.php`)
- Appointment scheduling submission (`appointment.html` -> `appointment.php`)

---

## 🛠️ Customization Guide

### 1. Updating Brand Name & Logo
- **Logo Images**: Located at `img/logo.png` and `img/logo.svg`.
- **Favicon**: Replace `img/favicon.png`.
- **Brand text**: Search for `Hair Society` across all HTML files to adjust page titles or tagline text.

### 2. Modifying Contact Details
- **Dedicated Page**: Edit the `.contact-info` block in [`contact.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/contact.html).
- **Global Footers**: The `.footer_widget` containing `Headquarters` and `Opening Hours` is replicated consistently in all `.html` files.
- **Google Maps**: Update the `iframe` `src` attribute with your desired address query in [`contact.html`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/contact.html#L101-L104).

### 3. Configuring Form Notification Emails
Open [`contact.php`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/contact.php) and [`appointment.php`](file:///c:/Users/QBS%20Accounting/Documents/websites/Hair-Society/appointment.php):
```php
$recipient = "info@hairsociety.com";         // Main inbox
$altRecipient = "booking@hairsociety.com";   // Secondary / booking inbox
```

---

## 💻 Tech Stack & Libraries

- **HTML5 & CSS3**: Semantic markup and modern styling.
- **Bootstrap 4**: Responsive grid, flexbox utilities, and modal support.
- **jQuery 1.12.4**: Fast, lightweight DOM manipulation and event delegation.
- **Owl Carousel**: Touch-enabled carousel slider for hero banners, services, and testimonials.
- **VenoBox**: Responsive lightbox plugin for images and videos.
- **SlickNav**: Mobile-first responsive navigation menu.
- **Nice-Select**: Clean, lightweight replacement for native dropdown selectors.
- **WOW.js & Animate.css**: Scroll-triggered entry animations.
- **Google Fonts**: `Prata`, `Lato`, and `Work Sans`.

---

## 📄 License & Credits

- **Website Template**: Custom designed & branded for **Hair Society**.
- **Images**: Royalty-free placeholder imagery for editorial and demonstration purposes.
- **Copyright**: &copy; 2026 Hair Society. All Rights Reserved.

