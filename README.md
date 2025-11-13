# SaaS Enterprise Theme

Hochmodernes WordPress Block Theme für B2B SaaS-Unternehmen mit über 60+ professionellen Patterns und modernen Design-Elementen.

## 🚀 Features

### Design & Layout
- **Full Site Editing (FSE)** - Vollständige Kontrolle über das Design
- **60+ Block Patterns** - Vorgefertigte Sektionen für schnellen Seitenaufbau
- **Responsive Design** - Mobile-First Ansatz für alle Geräte
- **Moderne Farbpalette** - Professionelle Farben speziell für SaaS-Unternehmen
- **Custom Gradients** - 5 vordefinierte Gradient-Stile
- **Flexible Layouts** - Content Width (840px) und Wide Width (1200px)

### Typography
- **Google Fonts Integration** - Poppins (Überschriften) und Inter (Fließtext)
- **6 Schriftgrößen** - Von Small bis 3X Large
- **Optimierte Lesbarkeit** - Line-Height 1.6 für bessere Lesbarkeit

### JavaScript Features
- **Back-to-Top Button** - Smooth Scroll zur Seitenoberseite
- **Reading Progress Bar** - Zeigt Lesefortschritt bei Blogbeiträgen
- **Mobile Menu** - Responsive Navigation für mobile Geräte
- **Cookie Consent** - DSGVO-konform mit LocalStorage
- **Typing Animation** - Animierte Texteffekte
- **Countdown Timer** - Für zeitlich begrenzte Angebote
- **Fade-In Animation** - Elemente animieren beim Scrollen

### Performance & Accessibility
- **Lazy Loading** - Automatisches Lazy Loading für Bilder
- **Minimales JavaScript** - Nur 5KB JavaScript
- **Semantisches HTML5** - Korrekte HTML-Struktur
- **WCAG 2.1 AA** - Accessibility-Standards
- **SEO-Optimiert** - Saubere Code-Struktur

## 📦 Installation

### Voraussetzungen
- WordPress 6.4 oder höher
- PHP 7.4 oder höher

### Installationsschritte

1. **Theme herunterladen**
   ```bash
   git clone https://github.com/Karma304/saas-enterprise-theme.git
   ```

2. **Theme hochladen**
   - Gehe zu WordPress Admin → Design → Themes → Neu hinzufügen
   - Klicke auf "Theme hochladen"
   - Wähle die ZIP-Datei des Themes
   - Klicke auf "Jetzt installieren"

3. **Theme aktivieren**
   - Klicke auf "Aktivieren" nach der Installation

4. **Fertig!**
   - Das Theme ist jetzt aktiv und einsatzbereit

## 🎨 Pattern-Kategorien

Das Theme enthält folgende Pattern-Kategorien:

### Hero Sections (`saas-hero`)
- Standard Hero
- Hero mit Split Layout
- Hero mit Video-Hintergrund
- Hero mit Formular
- Animierte Hero-Sektionen

### About Sections (`saas-about`)
- Team Grid
- Unternehmensgeschichte Timeline
- Mission & Vision
- Company Values Grid
- Karriere-Sektion

### Banners (`saas-banners`)
- Announcement Bar
- Cookie Consent Banner
- Limited Time Offer
- Webinar Registration
- Product Launch Banner

### Call-to-Action (`saas-cta`)
- Free Trial CTA
- Contact Sales Form
- Newsletter Signup
- Live Demo Booking

### Features (`saas-features`)
- Feature Highlights
- Feature Tabs
- Integration Showcase
- Process Steps

### Pricing (`saas-pricing`)
- 3-Spalten Pricing Table
- Comparison Table
- ROI Calculator

### Testimonials (`saas-testimonials`)
- Testimonial Grid
- Customer Success Stories
- Review Ratings (G2, Capterra, Trustpilot)

### Statistics (`saas-stats`)
- Stats Section mit großen Zahlen
- Trust Badges
- Social Proof Logos

### FAQ (`saas-faq`)
- FAQ mit Details-Elementen
- Accordion-Style FAQ

### Gallery (`saas-gallery`)
- Screenshot Gallery
- Video Gallery
- Logo Showcase

### Posts (`saas-posts`)
- Blog Grid (3 Spalten)
- Featured Blog Post
- Blog mit Sidebar

### Text Sections (`saas-text`)
- Two Column Text
- Text mit Icons
- Highlight Boxes
- Callout Boxes

## 🛠️ Anpassung

### Farben ändern

Farben können in der `theme.json` Datei angepasst werden:

```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary-brand",
          "color": "#0A4D8C",
          "name": "Primary Brand"
        }
      ]
    }
  }
}
```

### Schriftarten ändern

Schriftarten können in der `functions.php` angepasst werden:

```php
function saas_enterprise_theme_fonts() {
    wp_enqueue_style(
        'saas-enterprise-theme-fonts',
        'https://fonts.googleapis.com/css2?family=YourFont:wght@400;700&display=swap',
        array(),
        null
    );
}
```

### Eigene Patterns hinzufügen

Erstelle eine neue PHP-Datei im `/patterns/` Verzeichnis:

```php
<?php
/**
 * Title: Mein Custom Pattern
 * Slug: saas-enterprise-theme/my-pattern
 * Categories: saas-hero
 */
?>

<!-- wp:group -->
<div class="wp-block-group">
    <!-- Dein HTML/Block Code hier -->
</div>
<!-- /wp:group -->
```

## 📸 Screenshot

Um einen Screenshot für das Theme zu erstellen:

1. Erstelle eine Seite mit repräsentativen Patterns
2. Mache einen Screenshot der Seite (1200x900px empfohlen)
3. Speichere das Bild als `screenshot.png` im Theme-Root
4. Das Bild wird automatisch in der Theme-Übersicht angezeigt

## ❓ FAQ

### Ist das Theme kostenlos?
Ja, das Theme ist unter GPL v2 Lizenz veröffentlicht und kann kostenlos verwendet werden.

### Kann ich das Theme kommerziell nutzen?
Ja, das Theme kann für kommerzielle Projekte verwendet werden.

### Ist das Theme DSGVO-konform?
Ja, das Theme enthält einen Cookie Consent Banner und speichert keine personenbezogenen Daten ohne Zustimmung.

### Wie füge ich eigene JavaScript-Funktionen hinzu?
Füge deinen Code in `/assets/js/theme.js` hinzu oder erstelle eine neue JavaScript-Datei und binde sie in `functions.php` ein.

### Unterstützt das Theme WooCommerce?
Aktuell ist keine direkte WooCommerce-Integration vorhanden, kann aber in zukünftigen Versionen hinzugefügt werden.

## 🤝 Support

Bei Fragen oder Problemen:
- Öffne ein Issue auf GitHub
- Kontaktiere uns unter info@example.com

## 📝 Lizenz

Dieses Theme ist unter der [GPL v2 Lizenz](LICENSE) veröffentlicht.

## 👏 Credits

- **Entwickelt von:** Karma304
- **Schriftarten:** Google Fonts (Poppins, Inter)
- **Icons:** WordPress Core Icons
- **Inspiriert von:** Moderne SaaS-Websites wie Stripe, Notion, und Slack

## 🔄 Changelog

Siehe [CHANGELOG.md](CHANGELOG.md) für eine detaillierte Versionshistorie.

---

**Version:** 1.0.0  
**Letzte Aktualisierung:** 13. November 2025  
**WordPress-Kompatibilität:** 6.4+  
**PHP-Kompatibilität:** 7.4+
