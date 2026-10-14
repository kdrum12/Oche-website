@extends('layouts.app')

@section('title', 'Contact & Prayer Requests | Faith Connect Church')

@section('content')
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="section-tag" style="color: #6DAE98;">WE ARE HERE FOR YOU</span>
      <h1>CONTACT & PRAYER</h1>
      <p>Whether you have questions, need pastoral care, or want us to stand with you in prayer, our ministry team is ready to connect.</p>
    </div>
  </section>

  <!-- Main Contact Grid -->
  <section class="container" style="padding-top: 80px; padding-bottom: 80px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 60px; align-items: start;">
      
      <!-- Interactive Contact & Prayer Form -->
      <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.06); border: 1px solid #eee;">
        <span class="section-tag">SEND A MESSAGE</span>
        <h2 style="font-size: 28px; margin-bottom: 20px;">How Can We Help You?</h2>

        <form action="{{ route('contact.submit') }}" method="POST">
          @csrf
          
          <!-- Inquiry Type Selector -->
          <div class="form-group">
            <label class="form-label">Purpose of Contact</label>
            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 15px;">
              <label style="cursor: pointer; background: #FAF7F2; padding: 8px 16px; border-radius: 50px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px;">
                <input type="radio" name="type" value="general" checked> General Question
              </label>
              <label style="cursor: pointer; background: #FAF7F2; padding: 8px 16px; border-radius: 50px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px;">
                <input type="radio" name="type" value="prayer"> Prayer Request
              </label>
              <label style="cursor: pointer; background: #FAF7F2; padding: 8px 16px; border-radius: 50px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px;">
                <input type="radio" name="type" value="pastoral"> Pastoral Care
              </label>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" required class="form-control" placeholder="Jane Doe">
          </div>

          <div class="form-group">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" required class="form-control" placeholder="jane@example.com">
          </div>

          <div class="form-group">
            <label class="form-label">Phone Number (Optional)</label>
            <input type="tel" name="phone" class="form-control" placeholder="(555) 123-4567">
          </div>

          <div class="form-group">
            <label class="form-label" id="message-label">Your Message or Prayer Request</label>
            <textarea name="message" required rows="5" class="form-control" placeholder="Share whatever is on your heart..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px;">SEND MESSAGE ↗</button>
        </form>
      </div>

      <!-- Campus Location & Schedule Info -->
      <div>
        <div style="background: #1A2E26; color: white; border-radius: 16px; padding: 40px; margin-bottom: 30px;">
          <span class="section-tag" style="color: #6DAE98;">SUNDAY SERVICE TIMES</span>
          <h3 style="font-size: 24px; margin: 10px 0 15px;">Join Us Every Weekend</h3>
          <p style="opacity: 0.85; font-size: 14px; line-height: 1.8;">
            <strong>Morning Services:</strong> 9:00 AM & 11:00 AM<br>
            <strong>Faith Kids Program:</strong> During both morning services<br>
            <strong>Young Adults / Youth:</strong> Sundays @ 5:30 PM
          </p>
          <div style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 20px;">
            <p style="opacity: 0.85; font-size: 14px; margin: 0; line-height: 1.8;">
              📍 <strong>Main Campus:</strong><br>
              Faith Connect Church<br>
              704 11th Ave, New York, NY 55416
            </p>
          </div>
        </div>

        <div style="background: white; border-radius: 16px; padding: 35px; border: 1px solid #eee;">
          <h3 style="font-size: 20px; margin-bottom: 15px;">Church Office Hours</h3>
          <p style="font-size: 14px; color: var(--text-muted); line-height: 1.8; margin-bottom: 20px;">
            Monday - Thursday: 9:00 AM - 5:00 PM<br>
            Friday: 9:00 AM - 1:00 PM<br>
            Saturday & Sunday: Closed for pastoral gatherings
          </p>
          <div style="border-top: 1px solid #eee; padding-top: 15px; font-size: 14px;">
            <p style="margin-bottom: 8px;">📞 <strong>Phone:</strong> (000) 321-423-4567</p>
            <p style="margin-bottom: 8px;">✉️ <strong>General:</strong> hello@faithconnect.church</p>
            <p style="margin: 0;">🙏 <strong>Prayer Line:</strong> prayer@faithconnect.church</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Interactive FAQ Accordion -->
  <section style="background: #FFFBF5; padding: 90px 5%;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <span class="section-tag">COMMON INQUIRIES</span>
        <h2 style="font-size: 40px;">HAVE QUESTIONS?</h2>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">Everything you need to know about visiting or connecting with Faith Connect.</p>
      </div>

      <div class="accordion" style="max-width: 850px; margin: 0 auto;">
        <div class="accordion-item open">
          <div class="accordion-header">
            <span>How does the pastoral prayer team respond to requests?</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            Our intercessory prayer team receives requests confidentially every morning. If you request a pastoral phone call or hospital visit, one of our pastoral team members will connect with you within 24 hours.
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <span>Is there convenient parking on Sunday morning?</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            Yes! We have an expansive on-site guest parking lot directly facing the 11th Ave entrance. Friendly parking attendants will wave you into an open spot and direct you to the main lobby.
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <span>Can I request pastoral counseling or pre-marital counseling?</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            Absolutely. We offer biblical counseling sessions and SYMBIS-certified pre-marital mentoring. Please select "Pastoral Care" on the form above, and our counseling coordinator will reach out with scheduling options.
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <span>Can I get baptized or dedicate a child at Faith Connect?</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            We celebrate water baptisms quarterly and child dedications biannually! Let us know through this contact form, and we'll send you our upcoming class and celebration dates.
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
