<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support — Official Customer Service</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: " Simplified", "Forma DJR UI", Arial, Helvetica, sans-serif;
      color: #1a1a1a;
      background: #fff;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
    }

    a {
      text-decoration: none;
      color: #0073e6;
    }

    a:hover {
      text-decoration: underline;
    }

    /* ========== TOP HEADER ========== */
    .top-header {
      background: #fff;
      padding: 12px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #e8e8e8;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 28px;
    }

    /* Official  logo (2025 SVG from Wikimedia) */
    .wpr-main-logo-svg {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      flex-shrink: 0;
      text-decoration: none;
    }

    .wpr-main-logo-svg img {
      width: 42px;
      height: 42px;
      object-fit: contain;
      display: block;
    }

    .main-nav {
      display: flex;
      gap: 24px;
      font-size: 15px;
      font-weight: 500;
    }

    .main-nav a {
      color: #1a1a1a;
    }

    .main-nav a:hover {
      color: #0073e6;
      text-decoration: none;
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .Rectangle-426 {
      display: flex;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 0 10px;
      height: 38px;
      width: 260px;
      background: #fff;
      position: relative;
    }

    .Rectangle-426 input {
      border: none;
      outline: none;
      width: 100%;
      font-size: 14px;
      color: #333;
      height: 100%;
      background: transparent;
    }

    .Rectangle-426 input::placeholder {
      color: #888;
    }

    .wpr-search-icon-logo {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 28px;
      height: 28px;
      cursor: pointer;
      flex-shrink: 0;
    }

    .wpr-search-icon-logo::before {
      content: "";
      font-size: 15px;
    }

    .wpr-cart-icon {
      list-style: none;
      position: relative;
      display: flex;
      align-items: center;
    }

    .wpr-cart {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      position: relative;
    }

    .wpr-cart::before {
      content: "";
      display: block;
      width: 22px;
      height: 22px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232c3038' stroke-width='1.6'%3E%3Ccircle cx='9' cy='21' r='1'/%3E%3Ccircle cx='20' cy='21' r='1'/%3E%3Cpath d='M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6'/%3E%3C/svg%3E");
      background-size: contain;
      background-repeat: no-repeat;
    }

    .wpr-cart-count {
      position: absolute;
      top: -2px;
      right: -4px;
      background: #0073e6;
      color: #fff;
      font-size: 10px;
      font-weight: 700;
      min-width: 16px;
      height: 16px;
      border-radius: 50%;
      display: none;
      align-items: center;
      justify-content: center;
    }

    .screenReadingText {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0;
    }

    .sign-in-btn {
      background: #1a1a1a;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
    }

    .sign-in-btn:hover {
      background: #333;
    }

    /* ========== BLUE SUPPORT NAV ========== */
    .support-nav {
      background: #0073e6;
      padding: 0 40px;
      display: flex;
      align-items: center;
      height: 44px;
      gap: 26px;
    }

    .support-nav a {
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      padding: 12px 0;
      border-bottom: 3px solid transparent;
      white-space: nowrap;
    }

    .support-nav a.active {
      border-bottom-color: #fff;
    }

    .support-nav a:hover {
      text-decoration: none;
      opacity: 0.9;
    }

    /* ========== HERO BANNER ========== */
    .heroBanner {
      position: relative;
      min-height: 220px;
      background-image: url("https://i.postimg.cc/KYbvpcpn/banner-new.jpg");
      background-size: cover;
      background-position: right center;
      background-repeat: no-repeat;
      background-color: #f5f5f5;
      display: flex;
      align-items: center;
    }

    .heroBanner::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 55%;
      background: linear-gradient(90deg, #fff 0%, #fff 40%, rgba(255, 255, 255, 0.7) 70%, transparent 100%);
      pointer-events: none;
    }

    .heroHeadingWrapper {
      max-width: 1140px;
      width: 100%;
      margin: 0 auto;
      padding: 48px 40px;
      position: relative;
      z-index: 2;
    }

    .heroBannerHeading {
      font-size: 34px;
      font-weight: 400;
      color: #1a1a1a;
      letter-spacing: -0.4px;
    }

    /* ========== QUICK LINKS ========== */
    .quick-links {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 40px;
      display: flex;
      border-bottom: 1px solid #e5e5e5;
    }

    .quick-link {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 26px 12px;
      text-align: center;
      border-right: 1px solid #e5e5e5;
      cursor: pointer;
      transition: background 0.2s;
    }

    .quick-link:last-child {
      border-right: none;
    }

    .quick-link:hover {
      background: #f8f9fa;
    }

    .ql-icon {
      width: 36px;
      height: 36px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .ql-icon svg {
      width: 28px;
      height: 28px;
      stroke: #0073e6;
      fill: none;
      stroke-width: 1.6;
    }

    .quick-link.va .ql-icon {
      background: #0073e6;
      border-radius: 50%;
      width: 40px;
      height: 40px;
    }

    .quick-link.va .ql-icon svg {
      stroke: #fff;
      fill: #fff;
      width: 22px;
      height: 22px;
    }

    .quick-link span {
      font-size: 14px;
      color: #0073e6;
      font-weight: 500;
    }

    /* ========== SETUP SECTION ========== */
    .setup-section {
      max-width: 1000px;
      margin: 0 auto;
      padding: 40px 40px 44px;
      display: grid;
      grid-template-columns: 1.1fr 1fr;
      gap: 40px;
      align-items: center;
      border-bottom: 1px solid #e5e5e5;
    }

    .setup-img {
      width: 100%;
      border-radius: 4px;
      overflow: hidden;
      aspect-ratio: 16/10;
      position: relative;
      background: #f0f0f0;
    }

    .setup-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .setup-text h2 {
      font-size: 24px;
      font-weight: 500;
      margin-bottom: 12px;
      color: #1a1a1a;
    }

    .setup-text p {
      font-size: 15px;
      color: #444;
      margin-bottom: 18px;
      line-height: 1.55;
    }

    .btn-primary {
      display: inline-block;
      background: #0073e6;
      color: #fff;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: background 0.2s;
    }

    .btn-primary:hover {
      background: #005bb5;
      text-decoration: none;
      color: #fff;
    }

    .more-opts {
      margin-top: 16px;
      font-size: 13px;
      color: #666;
    }

    .more-opts a {
      display: block;
      margin-top: 5px;
      font-size: 14px;
    }

    /* ========== THREE TOPIC CARDS ========== */
    .topics {
      max-width: 1000px;
      margin: 0 auto;
      padding: 44px 40px 20px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
    }

    .topic {
      text-align: center;
    }

    .topic-icon-wrap {
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
    }

    .topic-icon-wrap img {
      max-height: 85px;
      max-width: 140px;
      object-fit: contain;
    }

    .win11 {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 20px;
      font-weight: 600;
      color: #0078d4;
    }

    .win11-sq {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2px;
      width: 26px;
      height: 26px;
    }

    .win11-sq span {
      background: #0078d4;
      border-radius: 1px;
    }

    .topic h3 {
      font-size: 15px;
      font-weight: 500;
      color: #1a1a1a;
      line-height: 1.4;
      margin-bottom: 16px;
      min-height: 42px;
    }

    .topic h3 a {
      color: #1a1a1a;
    }

    .topic h3 a:hover {
      color: #0073e6;
    }

    .topic .btn-primary {
      margin-bottom: 14px;
    }

    .topic .more-opts {
      text-align: left;
      padding: 0 8px;
    }

    .topic .more-opts a {
      margin-top: 4px;
    }

    /* ========== IDENTIFY SECTION ========== */
    .identify {
      background: #f7f8fa;
      padding: 48px 0;
    }

    .identify-inner {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 40px;
    }

    .identify-header {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 28px;
    }

    .identify-icon {
      width: 48px;
      height: 48px;
      flex-shrink: 0;
    }

    .identify-header h2 {
      font-size: 22px;
      font-weight: 500;
      line-height: 1.35;
    }

    .identify-grid {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 40px;
    }

    .id-left label {
      display: block;
      font-size: 14px;
      color: #444;
      margin-bottom: 8px;
    }

    .id-input-row {
      display: flex;
      gap: 10px;
      margin-bottom: 14px;
    }

    .id-input-row input {
      flex: 1;
      padding: 11px 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .id-input-row .btn-primary {
      background: #b0b0b0;
      cursor: default;
      padding: 11px 22px;
    }

    .id-input-row .btn-primary:hover {
      background: #b0b0b0;
    }

    .btn-outline {
      display: inline-block;
      border: 1.5px solid #0073e6;
      color: #0073e6;
      padding: 9px 16px;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 500;
      background: #fff;
      cursor: pointer;
      transition: all 0.2s;
    }

    .btn-outline:hover {
      background: #0073e6;
      color: #fff;
      text-decoration: none;
    }

    .id-detect {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 16px;
    }

    .id-signin {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      color: #555;
    }

    .id-signin a {
      font-weight: 500;
    }

    .id-right {
      border-left: 1px solid #ddd;
      padding-left: 32px;
    }

    .id-right p {
      font-size: 14px;
      color: #444;
      margin-bottom: 12px;
    }

    .id-right a {
      display: block;
      font-size: 14px;
      margin-bottom: 8px;
    }

    /* ========== KNOWLEDGE SEARCH ========== */
    .knowledge {
      padding: 48px 40px 36px;
      text-align: center;
      max-width: 1000px;
      margin: 0 auto;
    }

    .knowledge h2 {
      font-size: 22px;
      font-weight: 500;
      margin-bottom: 18px;
    }

    .knowledge-search {
      display: flex;
      max-width: 480px;
      margin: 0 auto;
      border: 1px solid #ccc;
      border-radius: 4px;
      overflow: hidden;
    }

    .knowledge-search input {
      flex: 1;
      border: none;
      outline: none;
      padding: 12px 16px;
      font-size: 15px;
    }

    .knowledge-search button {
      background: #e8e8e8;
      border: none;
      padding: 0 16px;
      cursor: pointer;
      font-size: 16px;
    }

    /* ========== BANNER CAROUSEL ========== */
    .banner-wrap {
      max-width: 1000px;
      margin: 0 auto 48px;
      padding: 0 40px;
    }

    .banner {
      position: relative;
      border-radius: 6px;
      overflow: hidden;
      height: 220px;
      display: flex;
      align-items: center;
      color: #fff;
      background: #1a252f;
    }

    .banner-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    .banner-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, rgba(26, 37, 47, 0.85) 0%, rgba(26, 37, 47, 0.4) 55%, transparent 100%);
      z-index: 1;
    }

    .banner-content {
      padding: 0 48px;
      max-width: 48%;
      z-index: 2;
      position: relative;
    }

    .banner-content h3 {
      font-size: 22px;
      font-weight: 500;
      margin-bottom: 8px;
    }

    .banner-content p {
      font-size: 15px;
      opacity: 0.95;
      margin-bottom: 16px;
    }

    .banner-dots {
      display: flex;
      justify-content: center;
      gap: 8px;
      margin-top: 14px;
    }

    .banner-dots span {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #ccc;
    }

    .banner-dots span.active {
      background: #0073e6;
    }

    .banner-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.15);
      border: none;
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      z-index: 3;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .banner-arrow:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    .banner-arrow.prev {
      left: 12px;
    }

    .banner-arrow.next {
      right: 12px;
    }

    /* ========== FOOTER ========== */
    footer {
      background: #111;
      color: #999;
      font-size: 13px;
      padding: 0;
    }

    .footer-region {
      max-width: 1100px;
      margin: 0 auto;
      padding: 16px 40px;
      border-bottom: 1px solid #333;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .footer-grid {
      max-width: 1100px;
      margin: 0 auto;
      padding: 36px 40px 28px;
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 24px;
    }

    .footer-col h4 {
      color: #fff;
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 14px;
    }

    .footer-col a {
      display: block;
      color: #999;
      margin-bottom: 9px;
      font-size: 13px;
    }

    .footer-col a:hover {
      color: #fff;
    }

    .socials {
      display: flex;
      gap: 14px;
      margin-top: 4px;
    }

    .socials a {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 13px;
    }

    .socials a:hover {
      background: #555;
      text-decoration: none;
    }

    .footer-legal {
      max-width: 1100px;
      margin: 0 auto;
      padding: 16px 40px 24px;
      border-top: 1px solid #333;
      font-size: 12px;
      color: #777;
    }

    .footer-legal a {
      color: #777;
      margin-right: 6px;
    }

    .footer-legal a:hover {
      color: #bbb;
    }

    .footer-copy {
      margin-top: 10px;
    }

    .feedback-tab {
      position: fixed;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      background: #0073e6;
      color: #fff;
      padding: 12px 8px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.3px;
      cursor: pointer;
      z-index: 100;
      writing-mode: vertical-rl;
      text-orientation: mixed;
      border-radius: 6px 0 0 6px;
      box-shadow: -2px 0 8px rgba(0, 0, 0, 0.12);
      user-select: none;
    }

    .feedback-tab:hover {
      background: #005bb5;
    }

    @media (max-width: 900px) {
      .top-header {
        padding: 10px 16px;
      }

      .main-nav {
        display: none;
      }

      .support-nav {
        padding: 0 16px;
        overflow-x: auto;
      }

      .heroHeadingWrapper {
        padding: 32px 16px;
      }

      .heroBannerHeading {
        font-size: 28px;
      }

      .heroBanner::before {
        width: 100%;
        background: rgba(255, 255, 255, 0.75);
      }

      .quick-links {
        padding: 0 16px;
        flex-wrap: wrap;
      }

      .quick-link {
        flex: 1 1 40%;
        border-right: none;
        border-bottom: 1px solid #e5e5e5;
      }

      .setup-section {
        grid-template-columns: 1fr;
        padding: 28px 16px;
      }

      .topics {
        grid-template-columns: 1fr;
        padding: 28px 16px;
        gap: 28px;
      }

      .identify-inner {
        padding: 0 16px;
      }

      .identify-grid {
        grid-template-columns: 1fr;
      }

      .id-right {
        border-left: none;
        padding-left: 0;
        border-top: 1px solid #ddd;
        padding-top: 20px;
      }

      .knowledge {
        padding: 32px 16px;
      }

      .banner-wrap {
        padding: 0 16px;
        margin-bottom: 32px;
      }

      .banner-content {
        max-width: 70%;
        padding: 0 24px;
      }

      .footer-grid {
        grid-template-columns: 1fr 1fr;
        padding: 28px 16px;
      }

      .footer-region,
      .footer-legal {
        padding-left: 16px;
        padding-right: 16px;
      }

      .Rectangle-426 {
        width: 180px;
      }
    }

    /* ========== ENHANCED SUPPORT CALL UI ========== */
    .independent-notice {
      background: #eef7ff;
      color: #174a78;
      border-bottom: 1px solid #cfe7fb;
      padding: 9px 40px;
      font-size: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .notice-icon {
      font-size: 15px;
    }

    .support-call-chip {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      background: #0b67c2;
      color: #fff !important;
      padding: 9px 14px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 700;
      box-shadow: 0 5px 16px rgba(11, 103, 194, .22);
      white-space: nowrap;
    }

    .support-call-chip:hover {
      background: #084f96;
      text-decoration: none;
    }

    .phone-dot {
      width: 27px;
      height: 27px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, .18);
      border-radius: 50%;
      font-size: 15px;
    }

    .hero-call {
      position: absolute;
      right: 40px;
      top: 28px;
      z-index: 4;
      display: flex;
      align-items: center;
      gap: 12px;
      background: rgba(255, 255, 255, .96);
      border: 1px solid #dbe7f2;
      border-radius: 16px;
      padding: 12px 16px;
      box-shadow: 0 12px 30px rgba(20, 40, 60, .14);
      backdrop-filter: blur(8px);
    }

    .hero-call-icon {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #e8f4ff;
      color: #0b67c2;
      font-size: 20px;
    }

    .hero-call small {
      display: block;
      color: #687584;
      font-size: 11px;
    }

    .hero-call strong {
      display: block;
      color: #13283d;
      font-size: 15px;
    }

    .call-card {
      margin-top: 18px;
      padding: 15px 17px;
      border: 1px solid #d8e8f6;
      border-radius: 12px;
      background: linear-gradient(135deg, #f8fcff, #eef7ff);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
    }

    .call-card-copy {
      font-size: 12px;
      color: #5d6b78;
    }

    .call-card-copy strong {
      display: block;
      color: #172a3d;
      font-size: 14px;
      margin-bottom: 2px;
    }

    .phone-cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #0b67c2;
      color: #fff !important;
      border-radius: 10px;
      padding: 10px 14px;
      font-weight: 700;
      font-size: 13px;
      box-shadow: 0 6px 16px rgba(11, 103, 194, .2);
    }

    .phone-cta:hover {
      background: #084f96;
      text-decoration: none;
    }

    .floating-call {
      position: fixed;
      right: 22px;
      bottom: 22px;
      z-index: 200;
      display: flex;
      align-items: center;
      gap: 10px;
      background: #0b67c2;
      color: #fff !important;
      padding: 10px 15px 10px 10px;
      border-radius: 999px;
      box-shadow: 0 10px 28px rgba(0, 0, 0, .22);
      font-size: 13px;
      font-weight: 700;
    }

    .floating-call .phone-ring {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #fff;
      color: #0b67c2;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
    }

    .floating-call:hover {
      background: #084f96;
      text-decoration: none;
    }

    .section-kicker {
      display: inline-block;
      text-transform: uppercase;
      letter-spacing: .08em;
      font-size: 11px;
      font-weight: 800;
      color: #0b67c2;
      margin-bottom: 7px;
    }

    @media (max-width: 900px) {
      .independent-notice {
        padding: 8px 16px;
        text-align: center;
      }

      .hero-call {
        position: relative;
        right: auto;
        top: auto;
        margin: 0 16px 20px;
      }

      .heroBanner {
        min-height: 270px;
        align-items: flex-start;
      }

      .floating-call {
        right: 12px;
        bottom: 12px;
      }
    }


    .quick-link,
    .topic,
    .setup-section,
    .knowledge-search,
    .banner {
      transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    .quick-link:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(0, 0, 0, .06);
    }

    .topic {
      padding: 20px 16px 18px;
      border: 1px solid #e8edf2;
      border-radius: 14px;
      background: #fff;
      box-shadow: 0 5px 18px rgba(20, 40, 60, .05);
    }

    .topics {
      gap: 22px;
    }

    .banner {
      box-shadow: 0 12px 30px rgba(20, 40, 60, .12);
    }
  </style>

  <style id="ultra-premium-overrides">
    :root {
      --ink: #0a1628;
      --muted: #607086;
      --blue: #0878f9;
      --blue2: #0059d6;
      --cyan: #19b8ff;
      --line: rgba(15, 39, 67, .10);
      --glass: rgba(255, 255, 255, .78);
      --shadow: 0 24px 70px rgba(20, 55, 95, .12);
    }

    html {
      scroll-behavior: smooth
    }

    body {
      font-family: Inter, "Segoe UI", Arial, sans-serif;
      color: var(--ink);
      background:
        radial-gradient(circle at 8% 0%, rgba(20, 148, 255, .10), transparent 28%),
        radial-gradient(circle at 92% 14%, rgba(0, 96, 255, .08), transparent 26%),
        #f7faff;
    }

    body:before {
      content: "";
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: -1;
      background-image: linear-gradient(rgba(15, 70, 120, .025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(15, 70, 120, .025) 1px, transparent 1px);
      background-size: 42px 42px;
      mask-image: linear-gradient(to bottom, #000, transparent 75%);
    }

    .top-header {
      min-height: 76px;
      padding: 12px clamp(18px, 4vw, 64px);
      background: rgba(255, 255, 255, .86);
      backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(0, 70, 130, .08);
      box-shadow: 0 8px 30px rgba(15, 45, 80, .05);
      position: relative;
      z-index: 20;
    }

    .logo-area {
      gap: 30px
    }

    .wpr-main-logo-svg {
      width: 54px;
      height: 54px;
      border-radius: 15px;
      background: linear-gradient(145deg, #0b7cff, #004fc5);
      box-shadow: 0 10px 24px rgba(0, 100, 240, .25);
    }

    .wpr-main-logo-svg img {
      width: 42px;
      height: 42px;
      filter: brightness(0) invert(1);
    }

    .main-nav {
      gap: 30px;
      font-size: 14px
    }

    .main-nav a {
      font-weight: 600;
      color: #31445a;
      transition: .2s
    }

    .main-nav a:hover {
      color: var(--blue);
      transform: translateY(-1px)
    }

    .header-right {
      gap: 10px
    }

    .Rectangle-426 {
      height: 44px;
      width: 250px;
      border-radius: 12px;
      border: 1px solid #dbe6f1;
      box-shadow: inset 0 1px 0 #fff, 0 5px 18px rgba(20, 50, 80, .05);
    }

    .support-call-chip {
      padding: 10px 16px !important;
      background: linear-gradient(135deg, #0b82ff, #0056d6) !important;
      box-shadow: 0 10px 25px rgba(0, 98, 235, .25) !important;
      border: 1px solid rgba(255, 255, 255, .25);
    }

    .sign-in-btn {
      border-radius: 11px;
      padding: 11px 17px
    }

    .support-nav {
      height: 48px;
      padding: 0 clamp(18px, 4vw, 64px);
      background: linear-gradient(90deg, #005ed9, #087df8 52%, #005bd5);
      box-shadow: 0 8px 24px rgba(0, 92, 210, .20);
    }

    .support-nav a {
      font-size: 13px;
      font-weight: 700;
      opacity: .95
    }

    .independent-notice {
      padding: 10px 20px;
      background: linear-gradient(90deg, #edf7ff, #f8fbff, #edf7ff);
      border-bottom: 1px solid #dcecf9;
      color: #34536e;
    }

    .heroBanner {
      min-height: 390px;
      background-position: center;
      overflow: hidden;
      isolation: isolate;
    }

    .heroBanner:after {
      content: "";
      position: absolute;
      inset: 0;
      z-index: 1;
      background:
        linear-gradient(90deg, rgba(255, 255, 255, .98) 0%, rgba(255, 255, 255, .88) 37%, rgba(255, 255, 255, .20) 70%, rgba(0, 30, 65, .08)),
        linear-gradient(180deg, transparent 70%, rgba(0, 22, 48, .12));
    }

    .heroBanner:before {
      width: 62%;
      z-index: 2;
      background: radial-gradient(circle at 18% 48%, rgba(255, 255, 255, .98), rgba(255, 255, 255, .82) 55%, transparent 76%);
    }

    .heroHeadingWrapper {
      max-width: 1240px;
      padding: 70px 48px;
      z-index: 4;
    }

    .section-kicker {
      background: #eaf5ff;
      border: 1px solid #d0eaff;
      border-radius: 999px;
      padding: 7px 12px;
      box-shadow: 0 5px 15px rgba(0, 100, 200, .08);
    }

    .heroBannerHeading {
      margin-top: 14px;
      font-size: clamp(42px, 5vw, 70px);
      line-height: 1.02;
      letter-spacing: -2.5px;
      font-weight: 750;
      max-width: 650px;
      background: linear-gradient(100deg, #07182e, #086de5 72%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero-call {
      right: 5%;
      top: 42px;
      padding: 14px 18px;
      border-radius: 18px;
      border: 1px solid rgba(255, 255, 255, .75);
      box-shadow: 0 24px 60px rgba(20, 55, 95, .20);
    }

    .hero-call-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(145deg, #e8f5ff, #cdeaff);
      box-shadow: inset 0 1px #fff;
    }

    .quick-links {
      max-width: 1120px;
      padding: 0;
      margin: -34px auto 0;
      position: relative;
      z-index: 8;
      border: 1px solid rgba(20, 65, 110, .09);
      border-radius: 20px;
      background: rgba(255, 255, 255, .88);
      backdrop-filter: blur(18px);
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    .quick-link {
      padding: 28px 18px;
      border-right: 1px solid #e8eff6;
    }

    .quick-link:hover {
      background: #fff;
      transform: none;
      box-shadow: inset 0 -3px var(--blue)
    }

    .ql-icon {
      width: 52px;
      height: 52px;
      border-radius: 15px;
      background: #eef7ff !important
    }

    .ql-icon svg {
      width: 27px !important;
      height: 27px !important;
      stroke: var(--blue) !important
    }

    .quick-link.va .ql-icon {
      background: linear-gradient(145deg, #087fff, #005bd8) !important;
      box-shadow: 0 10px 25px rgba(0, 100, 240, .25)
    }

    .quick-link span {
      font-size: 13px;
      font-weight: 700
    }

    .setup-section {
      max-width: 1120px;
      margin: 48px auto 0;
      padding: 0 0 54px;
      grid-template-columns: 1.15fr 1fr;
      gap: 58px;
      border-bottom: 0;
    }

    .setup-img {
      border-radius: 24px;
      box-shadow: 0 25px 65px rgba(15, 55, 95, .16);
      border: 1px solid rgba(255, 255, 255, .8);
    }

    .setup-img:after {
      content: "";
      position: absolute;
      inset: 0;
      border-radius: 24px;
      box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .45);
      pointer-events: none;
    }

    .setup-text h2 {
      font-size: 36px;
      letter-spacing: -1px;
      font-weight: 750
    }

    .setup-text p {
      font-size: 16px;
      line-height: 1.75;
      color: #536579
    }

    .call-card {
      border-radius: 18px !important;
      border: 1px solid #cfe6fb !important;
      box-shadow: 0 12px 32px rgba(0, 88, 170, .09);
    }

    .phone-cta {
      border-radius: 12px;
      background: linear-gradient(135deg, #0b83ff, #0056d5);
      box-shadow: 0 10px 25px rgba(0, 92, 220, .25);
      white-space: nowrap;
    }

    .topics {
      max-width: 1120px;
      padding: 10px 0 54px;
    }

    .topic {
      border: 1px solid rgba(20, 70, 120, .09);
      border-radius: 22px;
      padding: 28px 22px 24px;
      min-height: 330px;
      box-shadow: 0 16px 45px rgba(15, 50, 90, .08);
      position: relative;
      overflow: hidden;
    }

    .topic:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #087cff, #20c1ff);
    }

    .topic:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 55px rgba(15, 55, 100, .14)
    }

    .topic-icon-wrap {
      height: 100px
    }

    .topic h3 {
      font-size: 17px;
      font-weight: 700
    }

    .btn-primary {
      border-radius: 11px;
      padding: 11px 19px;
      background: linear-gradient(135deg, #087fff, #0059d4);
      box-shadow: 0 9px 20px rgba(0, 95, 220, .18);
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #066fdf, #004db9);
      transform: translateY(-1px)
    }

    .identify {
      padding: 64px 0;
      background:
        radial-gradient(circle at 10% 20%, rgba(20, 145, 255, .11), transparent 30%),
        linear-gradient(135deg, #edf7ff, #f8fbff);
      border-top: 1px solid #dfeefb;
      border-bottom: 1px solid #dfeefb;
    }

    .identify-inner {
      max-width: 1120px
    }

    .identify-header h2 {
      font-size: 32px;
      letter-spacing: -.7px;
      font-weight: 750
    }

    .identify-grid {
      padding: 30px;
      border-radius: 22px;
      background: rgba(255, 255, 255, .75);
      border: 1px solid rgba(40, 100, 150, .10);
      box-shadow: 0 20px 55px rgba(15, 55, 95, .08);
    }

    .id-input-row input,
    .knowledge-search {
      border-radius: 12px !important;
      border-color: #d6e4f0 !important;
      box-shadow: inset 0 1px 2px rgba(0, 30, 60, .04);
    }

    .btn-outline {
      border-radius: 11px;
      font-weight: 700
    }

    .knowledge {
      max-width: 1120px;
      padding: 68px 0 46px;
    }

    .knowledge h2 {
      font-size: 32px;
      font-weight: 750;
      letter-spacing: -.7px
    }

    .knowledge-search {
      max-width: 680px;
      height: 58px;
      background: #fff;
      box-shadow: 0 15px 40px rgba(20, 60, 100, .10);
    }

    .knowledge-search input {
      font-size: 16px
    }

    .knowledge-search button {
      background: #0879f4;
      color: #fff;
      width: 60px
    }

    .banner-wrap {
      max-width: 1120px;
      padding: 0;
      margin-bottom: 70px
    }

    .banner {
      height: 300px;
      border-radius: 24px;
      box-shadow: 0 24px 65px rgba(10, 45, 80, .16);
    }

    .banner-overlay {
      background: linear-gradient(90deg, rgba(3, 19, 38, .92), rgba(3, 29, 60, .60) 58%, rgba(3, 29, 60, .12));
    }

    .banner-content {
      max-width: 54%;
      padding-left: 58px
    }

    .banner-content h3 {
      font-size: 32px;
      font-weight: 750;
      letter-spacing: -.7px
    }

    .banner-content p {
      font-size: 16px;
      line-height: 1.6
    }

    .banner-arrow {
      width: 44px;
      height: 44px;
      background: rgba(255, 255, 255, .18);
      backdrop-filter: blur(8px)
    }

    .banner-dots span {
      width: 9px;
      height: 9px
    }

    footer {
      background: linear-gradient(180deg, #071421, #030a11);
      border-top: 1px solid #16314a
    }

    .footer-grid {
      max-width: 1120px
    }

    .footer-region,
    .footer-legal {
      max-width: 1120px
    }

    .footer-col h4 {
      font-size: 13px
    }

    .feedback-tab {
      background: linear-gradient(180deg, #087eff, #0056d4);
      box-shadow: -8px 0 25px rgba(0, 90, 210, .20);
    }

    .floating-call {
      right: 28px;
      bottom: 28px;
      padding: 8px 18px 8px 8px;
      background: linear-gradient(135deg, #0b83ff, #0055d2);
      box-shadow: 0 15px 40px rgba(0, 75, 190, .30);
    }

    .floating-call .phone-ring {
      box-shadow: 0 3px 10px rgba(0, 0, 0, .12)
    }

    @media(max-width:900px) {
      .main-nav {
        display: none
      }

      .header-right .Rectangle-426 {
        display: none
      }

      .heroBanner {
        min-height: 470px
      }

      .heroHeadingWrapper {
        padding: 70px 24px
      }

      .heroBannerHeading {
        font-size: 44px
      }

      .hero-call {
        right: 18px;
        top: auto;
        bottom: 24px
      }

      .quick-links {
        margin: -25px 16px 0
      }

      .setup-section,
      .topics,
      .banner-wrap,
      .knowledge {
        padding-left: 16px;
        padding-right: 16px
      }

      .setup-section {
        grid-template-columns: 1fr;
        gap: 30px
      }

      .topics {
        grid-template-columns: 1fr
      }

      .identify-grid {
        padding: 20px
      }

      .banner-content {
        max-width: 80%;
        padding-left: 30px
      }
    }
  </style>


  <style id="theme-preservation">
    /* Preserve original theme + logo style */
    .top-header {
      background: #fff !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      min-height: 0 !important;
    }

    .wpr-main-logo-svg {
      width: 48px !important;
      height: 48px !important;
      border-radius: 0 !important;
      background: transparent !important;
      box-shadow: none !important;
    }

    .wpr-main-logo-svg img {
      width: 42px !important;
      height: 42px !important;
      filter: none !important;
    }

    .main-nav a {
      color: #1a1a1a !important;
      font-weight: 500 !important
    }

    .support-nav {
      background: #0073e6 !important;
      box-shadow: none !important
    }

    .btn-primary {
      background: #0073e6 !important;
      box-shadow: none !important
    }

    .btn-primary:hover {
      background: #005bb5 !important
    }

    .support-call-chip {
      background: #0073e6 !important;
      box-shadow: none !important
    }

    .phone-cta {
      background: #0073e6 !important;
      box-shadow: none !important
    }

    .floating-call {
      background: #0073e6 !important;
      box-shadow: 0 10px 28px rgba(0, 0, 0, .22) !important
    }

    /* Keep the original hero composition but give the imagery more presence */
    .heroBanner {
      min-height: 330px !important;
      background-size: cover !important;
      background-position: center center !important;
    }

    .heroBanner:after {
      background: linear-gradient(90deg, rgba(255, 255, 255, .98) 0%, rgba(255, 255, 255, .90) 35%, rgba(255, 255, 255, .35) 63%, rgba(255, 255, 255, .02) 100%) !important;
    }

    .heroBannerHeading {
      font-size: 42px !important;
      font-weight: 400 !important;
      letter-spacing: -.6px !important;
      background: none !important;
      -webkit-text-fill-color: #1a1a1a !important;
      color: #1a1a1a !important;
    }

    .heroHeadingWrapper {
      padding: 58px 40px !important
    }

    /* High-quality photography treatment */
    .setup-img {
      aspect-ratio: 16/10 !important;
      background: #eef4f8 !important;
      border-radius: 8px !important;
      box-shadow: 0 16px 40px rgba(20, 50, 80, .12) !important;
    }

    .setup-img img {
      object-fit: cover !important;
      object-position: center !important;
      image-rendering: auto !important;
    }

    .photo-card {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      background: #f2f6fa;
    }

    .photo-card img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .photo-card:after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 65%, rgba(0, 0, 0, .10));
      pointer-events: none;
    }

    .topic {
      border-radius: 8px !important;
      box-shadow: 0 8px 24px rgba(20, 50, 80, .07) !important;
    }

    .topic:hover {
      transform: translateY(-2px) !important
    }

    /* Make the phone CTA attractive without changing the site's visual language */
    .hero-call {
      border-radius: 8px !important;
      box-shadow: 0 10px 28px rgba(20, 50, 80, .14) !important;
    }

    .call-card {
      border-radius: 8px !important;
    }
  </style>


  <style id="final-responsive-system">
    /* ===== RICH PHONE ICON + CROSS-DEVICE SYSTEM ===== */
    .phone-icon-rich {
      width: 42px;
      height: 42px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: linear-gradient(135deg, #0073e6 0%, #00a9ff 55%, #6a5cff 100%);
      color: #fff;
      box-shadow: 0 8px 22px rgba(0, 115, 230, .28), inset 0 1px rgba(255, 255, 255, .5);
    }

    .phone-icon-rich svg {
      width: 21px;
      height: 21px;
      stroke: #fff;
      fill: none;
      stroke-width: 2
    }

    .support-call-chip .phone-dot,
    .hero-call-icon,
    .floating-call .phone-ring {
      background: linear-gradient(135deg, #0073e6, #00a9ff 55%, #695cff) !important;
      color: #fff !important;
    }

    .support-call-chip .phone-dot {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .support-call-chip .phone-dot:before,
    .hero-call-icon:before,
    .floating-call .phone-ring:before {
      content: "";
      width: 20px;
      height: 20px;
      background:
        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3.08 5.18 2 2 0 0 1 5.08 3h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.64 2.62a2 2 0 0 1-.45 2.11L9 10.73a16 16 0 0 0 4.27 4.27l1.28-1.27a2 2 0 0 1 2.11-.45c.84.31 1.72.52 2.62.64A2 2 0 0 1 22 16.92z'/%3E%3C/svg%3E") center/contain no-repeat;
    }

    .hero-call-icon:before {
      width: 22px;
      height: 22px
    }

    .floating-call .phone-ring:before {
      width: 19px;
      height: 19px
    }

    /* ===== RESPONSIVE CONTAINER ===== */
    .top-header,
    .support-nav {
      padding-left: clamp(16px, 4vw, 64px);
      padding-right: clamp(16px, 4vw, 64px)
    }

    .heroHeadingWrapper,
    .setup-section,
    .topics,
    .identify-inner,
    .knowledge,
    .banner-wrap,
    .footer-region,
    .footer-grid,
    .footer-legal {
      width: min(1120px, calc(100% - 32px));
      max-width: 1120px;
    }

    .heroHeadingWrapper {
      margin: 0 auto
    }

    .setup-section,
    .topics,
    .knowledge,
    .banner-wrap {
      padding-left: 0;
      padding-right: 0
    }

    .footer-region,
    .footer-grid,
    .footer-legal {
      margin-left: auto;
      margin-right: auto
    }

    /* ===== LARGE DESKTOP ===== */
    @media (min-width:1400px) {
      .heroBanner {
        min-height: 410px !important
      }

      .heroBannerHeading {
        font-size: 48px !important
      }

      .quick-links {
        max-width: 1160px
      }

      .setup-section,
      .topics,
      .identify-inner,
      .knowledge,
      .banner-wrap {
        max-width: 1160px
      }

      .banner {
        height: 320px
      }
    }

    /* ===== LAPTOP / TABLET ===== */
    @media (max-width:1100px) {
      .header-right {
        flex-wrap: wrap;
        justify-content: flex-end
      }

      .Rectangle-426 {
        width: 210px !important
      }

      .support-call-chip {
        order: 3
      }

      .quick-links {
        width: calc(100% - 32px)
      }

      .setup-section,
      .topics,
      .identify-inner,
      .knowledge,
      .banner-wrap {
        width: calc(100% - 32px);
      }

      .setup-section {
        gap: 34px
      }

      .topics {
        gap: 18px
      }
    }

    /* ===== TABLET PORTRAIT ===== */
    @media (max-width:800px) {
      .top-header {
        padding-top: 10px;
        padding-bottom: 10px
      }

      .logo-area {
        gap: 15px
      }

      .main-nav {
        display: none
      }

      .header-right {
        gap: 7px
      }

      .Rectangle-426 {
        display: none !important
      }

      .support-call-chip {
        font-size: 12px !important;
        padding: 8px 11px !important;
      }

      .support-call-chip span:last-child {
        display: none
      }

      .support-call-chip .phone-dot {
        width: 31px;
        height: 31px
      }

      .sign-in-btn {
        padding: 8px 12px
      }

      .support-nav {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none
      }

      .support-nav::-webkit-scrollbar {
        display: none
      }

      .support-nav a {
        flex: 0 0 auto
      }

      .heroBanner {
        min-height: 420px !important
      }

      .heroHeadingWrapper {
        padding: 48px 24px !important
      }

      .heroBannerHeading {
        font-size: 38px !important
      }

      .hero-call {
        left: 24px;
        right: auto;
        top: auto;
        bottom: 24px;
        max-width: calc(100% - 48px);
      }

      .quick-links {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr);
        margin-top: -22px;
      }

      .quick-link {
        border-bottom: 1px solid #e5e5e5 !important
      }

      .setup-section {
        grid-template-columns: 1fr !important;
        padding-top: 35px
      }

      .setup-text h2 {
        font-size: 30px
      }

      .topics {
        grid-template-columns: 1fr !important
      }

      .identify-grid {
        grid-template-columns: 1fr !important
      }

      .id-right {
        border-left: 0 !important;
        border-top: 1px solid #ddd;
        padding: 24px 0 0 !important
      }

      .banner {
        height: 290px
      }

      .banner-content {
        max-width: 78%;
        padding: 0 30px
      }

      .banner-content h3 {
        font-size: 26px
      }

      .footer-grid {
        grid-template-columns: repeat(2, 1fr)
      }
    }

    /* ===== MOBILE ===== */
    @media (max-width:560px) {
      body {
        font-size: 14px
      }

      .independent-notice {
        font-size: 11px;
        line-height: 1.4;
        padding: 8px 14px
      }

      .top-header {
        min-height: 64px !important
      }

      .wpr-main-logo-svg {
        width: 42px !important;
        height: 42px !important
      }

      .wpr-main-logo-svg img {
        width: 38px !important;
        height: 38px !important
      }

      .header-right {
        margin-left: auto
      }

      .support-call-chip {
        padding: 6px !important
      }

      .support-call-chip .phone-dot {
        width: 35px;
        height: 35px
      }

      .sign-in-btn {
        font-size: 12px;
        padding: 8px 10px
      }

      .support-nav {
        height: 43px
      }

      .support-nav a {
        font-size: 12px;
        padding: 12px 2px
      }

      .heroBanner {
        min-height: 390px !important;
        background-position: 62% center !important;
      }

      .heroBanner:after {
        background: linear-gradient(90deg, rgba(255, 255, 255, .96), rgba(255, 255, 255, .74) 60%, rgba(255, 255, 255, .18)) !important;
      }

      .heroHeadingWrapper {
        width: 100%;
        padding: 42px 20px !important;
      }

      .section-kicker {
        font-size: 9px
      }

      .heroBannerHeading {
        font-size: 34px !important;
        letter-spacing: -1px !important;
        max-width: 330px;
      }

      .heroHeadingWrapper p {
        font-size: 14px !important;
        max-width: 310px !important
      }

      .hero-call {
        left: 20px;
        bottom: 20px;
        padding: 10px 13px;
        border-radius: 12px;
      }

      .hero-call-icon {
        width: 42px;
        height: 42px
      }

      .hero-call strong {
        font-size: 13px
      }

      .quick-links {
        width: calc(100% - 20px) !important;
        margin: -16px auto 0 !important;
        border-radius: 14px;
      }

      .quick-link {
        padding: 20px 8px !important
      }

      .ql-icon {
        width: 42px !important;
        height: 42px !important;
        margin-bottom: 7px
      }

      .quick-link span {
        font-size: 11px
      }

      .setup-section,
      .topics,
      .identify-inner,
      .knowledge,
      .banner-wrap {
        width: calc(100% - 28px) !important;
      }

      .setup-section {
        padding-top: 28px !important;
        gap: 22px
      }

      .setup-img {
        aspect-ratio: 4/3 !important
      }

      .setup-text h2 {
        font-size: 25px
      }

      .setup-text p {
        font-size: 14px
      }

      .call-card {
        flex-direction: column !important;
        align-items: stretch !important;
      }

      .phone-cta {
        text-align: center;
        justify-content: center
      }

      .topics {
        padding-top: 0
      }

      .topic {
        min-height: auto;
        padding: 24px 18px
      }

      .identify {
        padding: 42px 0
      }

      .identify-header h2 {
        font-size: 25px
      }

      .id-input-row {
        flex-direction: column
      }

      .id-input-row .btn-primary {
        width: 100%
      }

      .id-detect {
        flex-direction: column;
        align-items: stretch
      }

      .btn-outline {
        text-align: center
      }

      .knowledge {
        padding-top: 42px
      }

      .knowledge h2 {
        font-size: 25px
      }

      .knowledge-search {
        height: 52px
      }

      .banner {
        height: 330px !important;
        border-radius: 14px !important;
      }

      .banner-content {
        max-width: 90% !important;
        padding: 0 25px !important;
      }

      .banner-content h3 {
        font-size: 24px
      }

      .banner-content p {
        font-size: 13px
      }

      .banner-arrow {
        width: 34px;
        height: 34px
      }

      .footer-grid {
        grid-template-columns: 1fr !important;
        padding: 28px 14px !important
      }

      .footer-region,
      .footer-legal {
        padding-left: 14px !important;
        padding-right: 14px !important
      }

      .floating-call {
        right: 12px;
        bottom: 12px;
        padding: 7px 13px 7px 7px;
      }

      .floating-call .phone-ring {
        width: 36px;
        height: 36px
      }
    }

    /* Prevent overflow on every device */
    img {
      max-width: 100%;
      height: auto
    }

    a,
    button,
    input {
      max-width: 100%
    }

    * {
      min-width: 0
    }
  </style>


  <style id="clean-fresh-refresh">
    /* Clean + fresh visual refinement */
    body {
      background: #f8fafc !important;
      color: #172333 !important;
    }

    body:before {
      display: none !important
    }

    .top-header {
      background: #fff !important;
      box-shadow: 0 1px 0 rgba(15, 40, 70, .08) !important;
    }

    .support-nav {
      background: #0073e6 !important;
      box-shadow: none !important;
    }

    .independent-notice {
      background: #f5faff !important;
      color: #52677c !important;
      border-bottom: 1px solid #e5edf5 !important;
    }

    .heroBanner {
      min-height: 315px !important;
    }

    .heroBanner:after {
      background: linear-gradient(90deg, rgba(255, 255, 255, .98), rgba(255, 255, 255, .88) 42%, rgba(255, 255, 255, .20) 76%, transparent) !important;
    }

    .heroHeadingWrapper {
      padding: 52px 40px !important
    }

    .heroBannerHeading {
      font-size: 40px !important;
      letter-spacing: -.7px !important;
      font-weight: 500 !important;
    }

    .quick-links {
      box-shadow: 0 10px 35px rgba(30, 60, 90, .07) !important;
      border: 1px solid #e6edf4 !important;
    }

    .quick-link {
      box-shadow: none !important;
      transform: none !important;
    }

    .quick-link:hover {
      background: #f8fbff !important;
      box-shadow: inset 0 -2px #0073e6 !important;
    }

    .setup-section {
      padding-top: 46px !important;
    }

    .setup-img {
      box-shadow: 0 12px 32px rgba(25, 55, 85, .10) !important;
    }

    .setup-text h2,
    .knowledge h2,
    .identify-header h2 {
      color: #172333 !important;
    }

    .topic {
      box-shadow: 0 8px 24px rgba(25, 55, 85, .07) !important;
      border: 1px solid #e5ecf3 !important;
    }

    .topic:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 13px 30px rgba(25, 55, 85, .10) !important;
    }

    .identify {
      background: #f3f8fc !important;
      border-color: #e3edf5 !important;
    }

    .identify-grid {
      background: #fff !important;
      box-shadow: 0 10px 30px rgba(25, 55, 85, .06) !important;
    }

    .banner {
      box-shadow: 0 14px 38px rgba(20, 50, 80, .11) !important;
    }

    footer {
      background: #101820 !important;
    }

    /* Different phone treatments */
    .support-call-chip .phone-dot {
      width: 30px !important;
      height: 30px !important;
      background: #e8f4ff !important;
      color: #0073e6 !important;
    }

    .support-call-chip .phone-dot:before {
      width: 17px;
      height: 17px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%230073e6' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M7 3h3l2 5-2 2c1.2 2.4 3.1 4.3 5.5 5.5l2-2 5 2v3c0 1.1-.9 2-2 2C10.4 20.5 3.5 13.6 3.5 5c0-1.1.9-2 2-2H7z'/%3E%3C/svg%3E");
    }

    /* Hero: headset-style support icon */
    .hero-call-icon {
      background: #edf7ff !important;
      color: #0073e6 !important;
    }

    .hero-call-icon:before {
      width: 23px;
      height: 23px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%230073e6' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M4 14v-2a8 8 0 0 1 16 0v2'/%3E%3Cpath d='M4 14h2a2 2 0 0 1 2 2v3H6a2 2 0 0 1-2-2v-3zM20 14h-2a2 2 0 0 0-2 2v3h2a2 2 0 0 0 2-2v-3z'/%3E%3Cpath d='M16 20h-3'/%3E%3C/svg%3E") !important;
    }

    /* Floating CTA: handset inside a simple white circle */
    .floating-call .phone-ring {
      background: #fff !important;
      color: #0073e6 !important;
    }

    .floating-call .phone-ring:before {
      width: 18px;
      height: 18px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%230073e6' stroke-width='2.1' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M8 2h3l2 5-2.2 1.8a15 15 0 0 0 4.4 4.4L17 11l5 2v3c0 1.1-.9 2-2 2C11.7 18 6 12.3 6 5c0-1.7.3-3 2-3z'/%3E%3C/svg%3E") !important;
    }

    /* Main content call button: speech/call hybrid accent */
    .phone-cta {
      position: relative;
    }

    .phone-cta:before {
      content: "";
      display: inline-block;
      width: 16px;
      height: 16px;
      margin-right: 7px;
      vertical-align: -3px;
      background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 16.9V20a2 2 0 0 1-2.2 2A19.7 19.7 0 0 1 2 4.2 2 2 0 0 1 4 2h3.1a2 2 0 0 1 2 1.7c.1.8.3 1.6.6 2.4a2 2 0 0 1-.4 2L8 9.4a16 16 0 0 0 6.6 6.6l1.3-1.3a2 2 0 0 1 2-.4c.8.3 1.6.5 2.4.6a2 2 0 0 1 1.7 2z'/%3E%3C/svg%3E") center/contain no-repeat;
    }

    /* Clean mobile behavior */
    @media(max-width:700px) {
      .heroBanner {
        min-height: 390px !important
      }

      .heroHeadingWrapper {
        padding: 40px 20px !important
      }

      .heroBannerHeading {
        font-size: 34px !important
      }

      .hero-call {
        left: 20px !important;
        right: auto !important;
        bottom: 20px !important;
        top: auto !important;
      }

      .quick-links {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }
  </style>


  <style id="final-logo-blue-mobile-fix">
    /* =========================================================
   FINAL LOGO-MATCHED BLUE + MOBILE HELPLINE FIX
   Primary blue follows the existing logo/site blue: #0073E6
   ========================================================= */
    :root {
      --logo-blue: #0073E6;
      --logo-blue-dark: #005BB5;
      --logo-blue-deep: #004A94;
      --logo-blue-light: #EAF5FF;
      --logo-blue-soft: #F5FAFF;
      --logo-ink: #172333;
    }

    /* Keep one consistent blue family throughout the UI */
    a {
      color: var(--logo-blue)
    }

    .main-nav a:hover {
      color: var(--logo-blue) !important
    }

    .support-nav {
      background: var(--logo-blue) !important
    }

    .btn-primary {
      background: var(--logo-blue) !important;
      border-color: var(--logo-blue) !important
    }

    .btn-primary:hover {
      background: var(--logo-blue-dark) !important
    }

    .support-call-chip {
      background: var(--logo-blue) !important
    }

    .support-call-chip:hover {
      background: var(--logo-blue-dark) !important
    }

    .phone-cta {
      background: var(--logo-blue) !important
    }

    .phone-cta:hover {
      background: var(--logo-blue-dark) !important
    }

    .floating-call {
      background: var(--logo-blue) !important
    }

    .floating-call:hover {
      background: var(--logo-blue-dark) !important
    }

    .feedback-tab {
      background: var(--logo-blue) !important
    }

    .feedback-tab:hover {
      background: var(--logo-blue-dark) !important
    }

    .quick-link span {
      color: var(--logo-blue) !important
    }

    .ql-icon svg {
      stroke: var(--logo-blue) !important
    }

    .quick-link.va .ql-icon {
      background: var(--logo-blue) !important
    }

    .quick-link:hover {
      box-shadow: inset 0 -2px var(--logo-blue) !important
    }

    .btn-outline {
      color: var(--logo-blue) !important;
      border-color: var(--logo-blue) !important
    }

    .btn-outline:hover {
      background: var(--logo-blue) !important;
      color: #fff !important
    }

    .knowledge-search button {
      background: var(--logo-blue) !important
    }

    .banner-dots span.active {
      background: var(--logo-blue) !important
    }

    .win11 {
      color: var(--logo-blue) !important
    }

    .win11-sq span {
      background: var(--logo-blue) !important
    }

    .topic:before {
      background: linear-gradient(90deg, var(--logo-blue), #38A8FF) !important
    }

    .section-kicker {
      color: var(--logo-blue) !important;
      background: var(--logo-blue-light) !important;
      border-color: #CFE5FA !important
    }

    .identify {
      background: var(--logo-blue-soft) !important;
      border-color: #DCEAF7 !important
    }

    /* Header helpline: desktop */
    .support-call-chip {
      min-height: 42px;
      display: inline-flex !important;
      align-items: center;
      justify-content: center;
      gap: 8px;
      flex: 0 0 auto;
      white-space: nowrap;
      line-height: 1;
    }

    .support-call-chip .phone-dot {
      width: 30px !important;
      height: 30px !important;
      flex: 0 0 30px;
      background: var(--logo-blue-light) !important;
      color: var(--logo-blue) !important;
    }

    .support-call-chip .phone-dot:before {
      width: 17px !important;
      height: 17px !important;
    }

    /* Hero helpline */
    .hero-call {
      max-width: 360px;
      min-width: 245px;
    }

    .hero-call-icon {
      flex: 0 0 50px;
      background: var(--logo-blue-light) !important;
      color: var(--logo-blue) !important;
    }

    /* Main support cards */
    .call-card {
      width: 100%;
      min-width: 0;
    }

    .call-card-copy {
      min-width: 0;
      overflow-wrap: anywhere;
    }

    .phone-cta {
      flex: 0 0 auto;
      min-height: 42px;
      white-space: nowrap;
      justify-content: center;
    }

    /* Bottom floating helpline */
    .floating-call {
      min-height: 54px;
      max-width: calc(100vw - 24px);
      white-space: nowrap;
    }

    .floating-call .phone-ring {
      flex: 0 0 38px;
    }

    /* Fix inline bottom support container from the original markup */
    body>div[style*="max-width:1000px"] {
      width: min(1000px, calc(100% - 32px)) !important;
      max-width: none !important;
      padding: 0 !important;
      margin: 0 auto 44px !important;
    }

    /* ===== TABLET ===== */
    @media (max-width:900px) {
      .header-right {
        flex-wrap: nowrap !important;
        min-width: 0;
      }

      .support-call-chip {
        order: initial !important;
      }

      .hero-call {
        left: 24px !important;
        right: 24px !important;
        bottom: 24px !important;
        width: auto !important;
        max-width: none !important;
        min-width: 0 !important;
      }

      .call-card {
        gap: 12px;
      }
    }

    /* ===== MOBILE ===== */
    @media (max-width:700px) {
      .top-header {
        padding: 8px 12px !important;
      }

      .header-right {
        gap: 6px !important;
      }

      /* Header becomes icon + compact call button + sign in */
      .support-call-chip {
        width: 42px !important;
        height: 42px !important;
        min-height: 42px !important;
        padding: 5px !important;
        border-radius: 50% !important;
        gap: 0 !important;
        overflow: hidden !important;
        flex: 0 0 42px !important;
      }

      .support-call-chip .phone-dot {
        width: 32px !important;
        height: 32px !important;
        flex: 0 0 32px !important;
      }

      .support-call-chip span:last-child {
        display: none !important;
      }

      .sign-in-btn {
        white-space: nowrap !important;
        padding: 8px 10px !important;
        border-radius: 8px !important;
      }

      /* Hero helpline becomes a full-width, easy-to-tap call card */
      .hero-call {
        left: 16px !important;
        right: 16px !important;
        bottom: 16px !important;
        width: calc(100% - 32px) !important;
        min-width: 0 !important;
        max-width: none !important;
        min-height: 64px !important;
        padding: 10px 13px !important;
        border-radius: 12px !important;
        gap: 10px !important;
      }

      .hero-call-icon {
        width: 42px !important;
        height: 42px !important;
        flex: 0 0 42px !important;
      }

      .hero-call small {
        font-size: 10px !important;
      }

      .hero-call strong {
        font-size: 14px !important;
        white-space: nowrap !important;
      }

      /* Main helpline card stacks cleanly */
      .call-card {
        flex-direction: column !important;
        align-items: stretch !important;
        justify-content: flex-start !important;
        padding: 14px !important;
        gap: 12px !important;
      }

      .call-card-copy {
        width: 100% !important;
      }

      .phone-cta {
        width: 100% !important;
        min-height: 46px !important;
        padding: 12px 14px !important;
        white-space: normal !important;
        text-align: center !important;
      }

      /* Bottom helpline: compact pill, never wider than viewport */
      .floating-call {
        left: 12px !important;
        right: 12px !important;
        bottom: 12px !important;
        width: auto !important;
        max-width: none !important;
        min-height: 52px !important;
        justify-content: center !important;
        padding: 7px 14px 7px 7px !important;
        border-radius: 999px !important;
      }

      .floating-call .phone-ring {
        width: 36px !important;
        height: 36px !important;
        flex-basis: 36px !important;
      }

      /* Prevent the floating call from covering the footer */
      footer {
        padding-bottom: 76px !important;
      }

      /* Bottom "Still need help?" section */
      body>div[style*="max-width:1000px"] {
        width: calc(100% - 28px) !important;
        margin-bottom: 28px !important;
      }
    }

    /* ===== VERY SMALL PHONES ===== */
    @media (max-width:380px) {
      .wpr-main-logo-svg {
        width: 40px !important;
        height: 40px !important;
      }

      .wpr-main-logo-svg img {
        width: 36px !important;
        height: 36px !important;
      }

      .sign-in-btn {
        font-size: 11px !important;
        padding: 7px 8px !important;
      }

      .hero-call {
        padding: 9px 10px !important;
      }

      .hero-call strong {
        font-size: 12px !important;
      }

      .floating-call {
        font-size: 12px !important;
      }
    }
  </style>


  <style id="final-nav-normal-weight">
    /* Keep top navigation clean and regular-weight */
    .main-nav a,
    .support-nav a {
      font-weight: 400 !important;
    }

    .main-nav a:hover,
    .support-nav a:hover,
    .support-nav a.active {
      font-weight: 400 !important;
    }

    /* Keep navigation readable without bold styling */
    .main-nav {
      font-weight: 400 !important;
    }

    .support-nav {
      font-weight: 400 !important;
    }
  </style>

</head>

<body>

  <!-- Top Header -->
  <header class="top-header">
    <div class="logo-area">
      <!-- Brand-neutral support logo -->
      <a tabindex="0" href="#" class="wpr-main-logo-svg unselectable link_metrics" title="Printer Support"
        data-gtm-id="header" data-gtm-category="globalNavigation" data-gtm-value="1000184">
        <img src="https://i.postimg.cc/bNJZhvTY/logo.png" alt="logo" width="42" height="42">
      </a>

      <nav class="main-nav">
        <a href="#">Explore</a>
        <a href="#">Shop</a>
        <a href="#">Support</a>
      </nav>
    </div>

    <div class="header-right">
      <div class="Rectangle-426">
        <input id="search_focus_desktop" aria-label="Search  Support" title="Search  Support" type="text"
          class="search_trigger_onenter search-bar" name="search-bar" placeholder="Search" autocomplete="off"
          maxlength="200">
        <a tabindex="0" href="javascript:void(0)" class="wpr-search-icon-logo" title="Search .com"></a>
      </div>

      <div class="wpr-cart-icon">
        <a tabindex="0" id="shop_widget" class="wpr-cart" href="https://store..com/us-en/default/checkout/cart/"
          title="Shopping Cart">
          <span class="screenReadingText">Shopping Cart</span>
        </a>
        <span id="counterDesktop" class="item_count wpr-cart-count"></span>
      </div>

      <a class="support-call-chip" href="tel:+18332250202" aria-label="Call printer support at 1 833 656 9631">
        <span class="phone-dot" aria-hidden="true"></span>
        <span>Helpline : +1 (833) 225-0202</span>
      </a>
      <button class="sign-in-btn">Sign in</button>
    </div>
  </header>


  <!-- Blue Support Nav -->
  <nav class="support-nav">
    <a href="#">Home</a>
    <a href="#" class="active">Products ▾</a>
    <a href="#">Software and Drivers</a>
    <a href="#">Diagnostics ▾</a>
    <a href="#">Contact Us</a>
    <a href="#">Business Support ▾</a>
    <a href="#">My Account ▾</a>
  </nav>

  <!-- Hero Banner -->
  <div class="heroBanner" data-image-quality="high"
    style="background-image: url('https://i.postimg.cc/KYbvpcpn/banner-new.jpg');">
    <div class="heroHeadingWrapper">
      <span class="section-kicker">Fast help for printer issues</span>
      <h1 class="heroBannerHeading">Printer Support</h1>
      <p style="max-width:570px;margin-top:18px;font-size:17px;color:#536579;line-height:1.7;">Fast, clear help for
        setup, printing, scanning, connectivity, and common printer problems.</p>
    </div>
    <a class="hero-call" href="tel:+18332250202" aria-label="Call printer support">
      <span class="hero-call-icon" aria-hidden="true"></span>
      <span><small>Need help now?</small><strong>+1 (833) 225-0202</strong></span>
    </a>
  </div>

  <!-- Quick Links -->
  <div class="quick-links">
    <a href="#" class="quick-link">
      <div class="ql-icon">
        <svg viewBox="0 0 24 24">
          <path d="M12 3v12m0 0l-4-4m4 4l4-4" />
          <path d="M4 17v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
        </svg>
      </div>
      <span>Download drivers ›</span>
    </a>
    <a href="#" class="quick-link">
      <div class="ql-icon">
        <svg viewBox="0 0 24 24">
          <rect x="3" y="4" width="18" height="16" rx="2" />
          <path d="M3 10h18" />
          <path d="M8 2v4M16 2v4" />
        </svg>
      </div>
      <span>Check warranty status ›</span>
    </a>
    <a href="#" class="quick-link">
      <div class="ql-icon">
        <svg viewBox="0 0 24 24">
          <path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z" />
          <path d="M19 10v2a7 7 0 01-14 0v-2" />
          <line x1="12" y1="19" x2="12" y2="23" />
          <line x1="8" y1="23" x2="16" y2="23" />
        </svg>
      </div>
      <span>Contact us ›</span>
    </a>
    <a href="#" class="quick-link va">
      <div class="ql-icon">
        <svg viewBox="0 0 24 24">
          <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
        </svg>
      </div>
      <span>Ask our Virtual Assistant ›</span>
    </a>
  </div>

  <!-- Contact Support Section -->
  <section class="setup-section">
    <div class="setup-img">
      <img alt="Contact  Support" src="https://i.postimg.cc/pXZHVQs3/feature.jpg"
        onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(150deg,#e3eef5,#c5d8e6)';">
    </div>
    <div class="setup-text">
      <h2>Contact Printer Support</h2>
      <p>Need help with your printer? Our support team is available to assist you with setup, troubleshooting, and more.
      </p>
      <div class="call-card">
        <div class="call-card-copy">
          <strong>Speak with a support specialist</strong>
          Available 24/7 for technical support
        </div>
        <a href="tel:+18332250202" class="phone-cta">Call now</a>
      </div>
      <div class="more-opts" style="margin-top:14px;">
        <a href="tel:+18332250202"><b>Call +1 (833) 225-0202 ›</b></a>
        <a href="#">Chat with Virtual Assistant ›</a>
      </div>
    </div>
  </section>

  <!-- Three Topics -->
  <section class="topics">
    <div class="topic">
      <div class="topic-icon-wrap">
        <div class="win11">
          <div class="win11-sq"><span></span><span></span><span></span><span></span></div>
          Windows 11
        </div>
      </div>
      <h3><a href="#">Scan / Print stopped working after upgrading to Windows 11?</a></h3>
      <a href="#" class="btn-primary">Fix Scan/Print</a>
      <div class="more-opts">
        More support options for this topic
        <a href="#">Fix issues with MSFT updates ›</a>
        <a href="#">Windows 11 support page ›</a>
      </div>
    </div>

    <!-- How to print, scan and fax - real image -->
    <div class="topic">
      <div class="topic-icon-wrap">
        <img alt="" src="https://i.postimg.cc/BQ8T4NS7/Printer-2.png" onerror="this.style.display='none';">
      </div>
      <h3><a href="#">How to print, scan and fax</a></h3>
      <a href="#" class="btn-primary">Print Scan Fax</a>
      <div class="more-opts">
        More support options for this topic
        <a href="#">View how to print videos ›</a>
      </div>
    </div>

    <!-- Printer offline - real image -->
    <div class="topic">
      <div class="topic-icon-wrap">
        <img alt="" src="https://i.postimg.cc/0y0dBj2D/printeroffline.png" onerror="this.style.display='none';">
      </div>
      <h3><a href="#">Printer offline or print job stuck in queue?</a></h3>
      <a href="#" class="btn-primary">Get the app</a>
      <div class="more-opts">
        More support options for this topic
        <a href="#">Use Diagnose &amp; Fix in the app to repair common printing issues ›</a>
      </div>
    </div>
  </section>

  <!-- Identify Product -->
  <section class="identify">
    <div class="identify-inner">
      <div class="identify-header">
        <div class="identify-icon">
          <svg viewBox="0 0 48 48" fill="none" stroke="#0073e6" stroke-width="1.8">
            <rect x="6" y="14" width="28" height="22" rx="2" />
            <path d="M10 20h20M10 26h14" />
            <circle cx="36" cy="30" r="9" />
            <path d="M42 36l5 5" />
          </svg>
        </div>
        <h2>Identify your printer for manuals and<br>specific product information</h2>
      </div>

      <div class="identify-grid">
        <div class="id-left">
          <label>Enter your serial number, product number or product name</label>
          <div class="id-input-row">
            <input type="text" placeholder="Example: HU265BM18V, LaserJet P">
            <button class="btn-primary">Submit</button>
          </div>
          <div class="id-detect">
            <a href="#" class="btn-outline">Or, let detect your product</a>
            <a href="#">Find out more ›</a>
          </div>
          <div class="id-signin">
            <span>👤</span>
            <a href="#">Sign in to select a saved product</a>
          </div>
        </div>
        <div class="id-right">
          <p>Examples of where to find your product name, product number, or serial number</p>
          <a href="#">Locate your product's information label</a>
          <a href="#">Watch a video</a>
          <a href="#">Samsung printer help</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Knowledge Library Search -->
  <section class="knowledge">
    <h2>Search our knowledge library</h2>
    <div class="knowledge-search">
      <input type="text" placeholder="What can we help you with?">
      <button aria-label="Search">🔍</button>
    </div>
  </section>

  <!-- Banner -->
  <div class="banner-wrap">
    <div class="banner">
      <img class="banner-bg" loading="lazy" alt="Built-in support for your PCs and printers"
        src="https://i.postimg.cc/nc84VBX1/SA-Carousel.jpg" fetcriority="high" decoding="async"
        onerror="this.style.display='none';">
      <div class="banner-overlay"></div>
      <button class="banner-arrow prev">‹</button>
      <div class="banner-content">
        <h3>Issue with your printer?</h3>
        <p>Use our diagnostic tools for help with common Printer issues</p>
        <a href="#" class="btn-primary">Printer Diagnostic Tools</a>
      </div>
      <button class="banner-arrow next">›</button>
    </div>
    <div class="banner-dots">
      <span class="active"></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div style="max-width:1000px;margin:0 auto 44px;padding:0 40px;">
    <div class="call-card" style="justify-content:center;">
      <div class="call-card-copy">
        <strong>Still need help?</strong>
        Call our printer-support team.
      </div>
      <a href="tel:+18332250202" class="phone-cta">+1 (833) 225-0202</a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-region">
      Country/Region: <span style="color:#fff; margin-left:4px;">🇺🇸 United States</span>
    </div>

    <div class="footer-grid">
      <div class="footer-col">
        <h4>About Us</h4>
        <a href="#">Contact </a>
        <a href="#">Careers</a>
        <a href="#">Investor relations</a>
        <a href="#">Sustainable impact</a>
        <a href="#">Newsroom</a>
        <a href="#">Tech Takes</a>
      </div>
      <div class="footer-col">
        <h4>Ways to buy</h4>
        <a href="#">Shop online</a>
        <a href="#"> World: Brand exclusive stores</a>
        <a href="#">Call an rep</a>
        <a href="#">Find a reseller</a>
        <a href="#"> Promotions</a>
      </div>
      <div class="footer-col">
        <h4>Support</h4>
        <a href="#">Download drivers</a>
        <a href="#">Support &amp; troubleshooting</a>
        <a href="#">Community</a>
        <a href="#">Authorized service providers</a>
        <a href="#">Check repair status</a>
        <a href="#">Featured links</a>
      </div>
      <div class="footer-col">
        <h4>Support Partners</h4>
        <a href="#"> Amplify Partner Program</a>
        <a href="#"> Partner Portal</a>
        <a href="#">Developers</a>
      </div>
      <div class="footer-col">
        <h4>Stay connected</h4>
        <div class="socials">
          <a href="#" title="Facebook">f</a>
          <a href="#" title="Instagram">ig</a>
          <a href="#" title="X">𝕏</a>
          <a href="#" title="YouTube">▶</a>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div>
        <a href="#">Recalls</a> |
        <a href="#">Product recycling</a> |
        <a href="#">Accessibility</a> |
        <a href="#">CSR Policy</a> |
        <a href="#">Entity Annual Return</a> |
        <a href="#">Privacy</a> |
        <a href="#">Terms of use</a> |
        <a href="#">Cookie Preferences</a>
      </div>
      <div class="footer-copy">
        © 2026. The information contained herein is subject to change without notice.
      </div>
    </div>
  </footer>

  <div class="feedback-tab">Give Feedback</div>
  <a class="floating-call" href="tel:+18332250202" aria-label="Call printer support">
    <span class="phone-ring" aria-hidden="true"></span>
    <span>Call Support</span>
  </a>

</body>

</html>
