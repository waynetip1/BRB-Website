# Board Ready Beauty — Website Context for Claude Code

## PROJECT OVERVIEW

**Business:** Board Ready Beauty (BRB)  
**Website:** boardreadybeauty.com  
**Platform:** WordPress on Bluehost  
**Theme:** GeneratePress (free) — handles global nav, header, footer  
**Page approach:** Hybrid — GeneratePress wraps pages; custom HTML pasted into the WordPress Code Editor for each page body  
**Owner:** Wayne (web/tech lead) + Teresa (lead educator, 35+ years experience, brand face)  
**Location:** Princeton, TX — serving Dallas–Fort Worth area

---

## BRAND SYSTEM

### Colors
```css
--brb-rose:        #c8185a   /* primary CTA, headings */
--brb-rose-dark:   #a01248   /* hover states */
--brb-rose-light:  #fbeef4   /* section backgrounds */
--brb-gold:        #c49a2a   /* accent, stats, badges */
--brb-gold-light:  #fdf6e3   /* gold section backgrounds */
--brb-cream:       #fdf9f6   /* page background */
--brb-charcoal:    #1e1a20   /* primary text, dark sections */
--brb-muted:       #6b6170   /* secondary text */
--brb-border:      #ecdde5   /* borders, dividers */
```

### Typography
```css
/* Loaded via Google Fonts in GeneratePress Additional CSS */
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap');

font-family: 'Playfair Display', serif;   /* headings */
font-family: 'DM Sans', sans-serif;       /* body, UI */
```

### Brand Assets (on server)
- Logo: `https://boardreadybeauty.com/wp-content/uploads/2026/03/brbLOGO.png`
- Teresa photo: `https://boardreadybeauty.com/wp-content/uploads/2026/03/teresa-image.jpg`

---

## TECH STACK

| Layer | Tool |
|---|---|
| Hosting | Bluehost (WordPress) |
| Theme | GeneratePress (free) |
| Forms | WPForms Pro (form ID 96 = lead magnet) |
| eCommerce | WooCommerce + Stripe |
| Class booking (Phase 2) | WooCommerce Bookings ($249/yr — activate when Teresa sets first class date) |
| Email delivery | Brevo via WP Mail SMTP |
| SEO | Rank Math |
| Mock exam AI | Claude API (`claude-sonnet-4-20250514`) |

### GeneratePress Config
- **Additional CSS location:** Appearance → Customize → Additional CSS
- `.entry-content` padding stripped to 0 (pages go full-width)
- `.page .entry-header` hidden (no page titles showing)
- Logo height: `36px !important`
- Nav link hover color: rose `#c8185a`
- Footer background: `#140f17`

### Nav Menu (Primary Navigation)
| Label | URL |
|---|---|
| Free Checklist | /free-checklist/ |
| Classes | /#classes |
| Written Exam | /#written |
| About Teresa | /about/ |
| Reserve Your Spot | styled as pink pill button |

### Footer Menu
Home, Free Checklist, Classes, About Teresa, Contact, Privacy Policy, email

---

## HTML PAGE RULES (CRITICAL)

- **All pages are body-content-only** — NO `<!DOCTYPE>`, `<html>`, `<head>`, `<nav>`, `<footer>` tags
- GeneratePress provides all wrapper elements
- Paste into **WordPress Code Editor** (not Gutenberg visual editor)
- All CSS class names prefixed to avoid GP conflicts: `brb-`, `abt-`, `lm-`
- All heading styles use `!important` to override GP defaults
- Scroll animations use `IntersectionObserver`, scoped with unique names per page
- WPForms shortcode: `[wpforms id="96"]`

---

## PAGES BUILT

### Homepage — boardreadybeauty.com
Sections in order:
1. **Hero** — "Don't Let Exam Day Be the Day You're Not Ready"
2. **Trust bar** — dark charcoal, scrolling trust items
3. **Pain section** — "Does Any of This Sound Like You?"
4. **Practical class section** — lists all 9 exam sections
5. **Technical detail** — 9-card grid of exam sections
6. **Written exam section** — stakes bar + exam structure + $47 product card
7. **How it works** — 3 steps
8. **Lead magnet** — WPForms id="96"
9. **About Teresa strip**
10. **Final CTA**

**Key copy in written exam section:**
- Stakes bar: ~$15,800 tuition / 1,000 hours / $181 total fees / $55 per retake
- "Our mock exam prep is $47. Failing and retaking costs $55 — plus another month without your license"
- Product card: $47, button: "Get Instant Access — $47"

---

### About — boardreadybeauty.com/about/
- Dark hero with Teresa's photo
- Stats: 35+ years / 5 certifications / 3hr class / 1 goal
- Story + credentials block (Sassoon, Pivot Point, Wella, Paul Mitchell, Ogle)
- 9-card "What Teresa Teaches" grid
- Why Board Ready Beauty exists
- CTA — two buttons: Reserve Spot + Written Exam Prep $47

---

### Free Checklist — boardreadybeauty.com/free-checklist/
- Conversion-focused hero with WPForms card (id="96")
- "Why students struggle" section
- About Teresa strip with upsell buttons

---

### Waitlist — boardreadybeauty.com/waitlist/
- WPForms waitlist configured and connected to Brevo "Class Waitlist" segment
- Phase 1 booking: WPForms waitlist
- Phase 2 booking: WooCommerce Bookings (activate when Teresa sets first class date)

---

### Refund & Returns Policy — boardreadybeauty.com/refund-policy/
- Full refund for class cancellations 5+ business days out
- No refunds on digital products (written exam app)
- 15-day returns on unopened Board Ready Kit

---

### Pages Still Needed
- **Thank You page** — post opt-in redirect after checklist download
- **Contact page** — simple contact form + email + DFW service area note
- **Written Exam Prep product page** — dedicated sales page for the $47 app
- **Board Ready Kit coming soon page** — placeholder built, product TBD

---

## EMAIL SETUP

- **WPForms form ID 96** — name + email capture
- **Brevo** connected via WP Mail SMTP
- Lead magnet: PDF checklist + printable bag labels (22 labeled items)
- **4-email welcome sequence** — not yet built in Brevo:
  1. Deliver checklist PDF
  2. Introduce Teresa + practical class
  3. Written exam — the $55 retake argument
  4. Final push — reserve your spot

---

## CONTENT RULES (APPLY EVERYWHERE)

- Teresa = **"educator"** not "instructor"
- **35+ years** (not 26+ — corrected)
- Teresa's credentials: Sassoon trained, Pivot Point certified, Wella Color Certified, Paul Mitchell trained, Ogle School educator
- **9 practical exam sections** (use these exactly, no others):
  1. Pre-exam setup
  2. Monomer and polymer over tip service
  3. Blood exposure incident
  4. Facial
  5. Waxing
  6. Haircut
  7. Perm
  8. Blow dry
  9. Chemical (relaxer)
- Shampoo & Scalp **removed** — no longer on Texas state board practical exam
- Nail care = "Monomer and polymer over tip service" (not manicure)
- All educational claims must trace to **7031.pdf** (PSI candidate handbook) — no exceptions

---

## KEY MARKET FACTS (for copy)

- ~50% national fail rate on written exam
- Written exam fee: **$55 per attempt — non-refundable**
- Practical exam fee: $76 per attempt — non-refundable
- TDLR license application fee: $50
- Average Texas cosmetology school tuition: ~$15,819
- Exam: 100 multiple-choice questions, **70% to pass**
- Topic weighting: Hair & Scalp 40%, Infection Control 28%, rest across skin, nails, state law, safety
- Eligibility good for 5 years, unlimited retakes

---

## REVENUE TARGETS

| Source | Price | Month 12 Goal | Monthly Revenue |
|---|---|---|---|
| Practical classes (Teresa) | $150/student | 4 classes × 15 students | $9,000 |
| Written exam mock tests | $47 | 200 sales | $9,400 |
| Board Ready Kit | $125 | 40 units | $5,000 |
| Contractor educator (month 9+) | Net $2,100/class | 3 classes | $6,300 |
| **Total** | | | **$29,700** |

---

## NEXT WEBSITE ACTION ITEMS

1. Build **Thank You page** (post checklist opt-in redirect)
2. Build **Contact page** (WPForms contact form, DFW area note)
3. Build **Written Exam Prep product page** (dedicated sales page for $47 app)
4. Set up **4-email Brevo welcome sequence**
5. Activate **WooCommerce Bookings** when Teresa sets first class date
6. Launch **Board Ready Kit** in WooCommerce ($125, physical supply kit)
