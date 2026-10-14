@extends('layouts.app')

@section('title', 'Give & Support Our Mission | Faith Connect Church')

@section('content')
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="section-tag" style="color: #6DAE98;">GENEROSITY IN ACTION</span>
      <h1>SUPPORT OUR MISSION</h1>
      <p>Thank you for partnering with Faith Connect to share the gospel, comfort the hurting, and build a lasting legacy of faith in our community.</p>
    </div>
  </section>

  <!-- Interactive Giving Section -->
  <section class="container" style="padding-top: 70px; padding-bottom: 80px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 60px; align-items: start;">
      
      <!-- Interactive Donation Form Card -->
      <div class="donation-card">
        <h2 style="font-size: 28px; margin-bottom: 8px;">Online Giving Form</h2>
        <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 25px;">Fast, secure, and tax-deductible contributions.</p>

        <form action="{{ route('donations.process') }}" method="POST">
          @csrf
          <input type="hidden" name="frequency" id="donation-frequency-input" value="one-time">
          <input type="hidden" name="amount" id="donation-amount-input" value="100">

          <!-- Frequency Toggle -->
          <div class="frequency-toggle">
            <button type="button" class="freq-btn active" data-freq="one-time">ONE-TIME GIFT</button>
            <button type="button" class="freq-btn" data-freq="monthly">GIVE MONTHLY</button>
          </div>

          <!-- Quick Amount Grid -->
          <label class="form-label">Select Amount</label>
          <div class="amount-grid">
            <button type="button" class="amount-btn" data-amount="25">$25</button>
            <button type="button" class="amount-btn" data-amount="50">$50</button>
            <button type="button" class="amount-btn active" data-amount="100">$100</button>
            <button type="button" class="amount-btn" data-amount="250">$250</button>
            <button type="button" class="amount-btn" data-amount="500">$500</button>
            <button type="button" class="amount-btn" data-amount="1000">$1,000</button>
          </div>

          <!-- Custom Amount -->
          <div class="form-group">
            <label class="form-label">Or Custom Amount ($ USD)</label>
            <input type="number" id="custom-amount" class="form-control" value="100" min="1" step="1" placeholder="Enter custom amount">
          </div>

          <!-- Fund Category -->
          <div class="form-group">
            <label class="form-label">Choose Fund / Purpose</label>
            <select name="fund" required class="form-control">
              <option value="General Offering & Ministry Operations" selected>General Offering & Ministry Operations</option>
              <option value="City Hope Food Pantry & Homeless Outreach">City Hope Food Pantry & Homeless Outreach</option>
              <option value="Global Missions & Orphan Care">Global Missions & Orphan Care</option>
              <option value="NextGen Youth & Camp Scholarships">NextGen Youth & Camp Scholarships</option>
              <option value="Building & Community Facility Expansion">Building & Community Facility Expansion</option>
            </select>
          </div>

          <!-- Donor Details -->
          <div class="form-group">
            <label class="form-label">Donor Name (Optional for receipt)</label>
            <input type="text" name="donor_name" class="form-control" placeholder="Jane & John Doe">
          </div>

          <div class="form-group">
            <label class="form-label">Email for Tax Receipt</label>
            <input type="email" name="donor_email" class="form-control" placeholder="jane@example.com">
          </div>

          <!-- Summary Box -->
          <div style="background: #FFF8F5; border: 1px solid #FFE0D3; border-radius: 8px; padding: 16px; margin-bottom: 25px; font-size: 14px;">
            Gift Summary: <strong id="summary-amount" style="color: var(--primary); font-size: 18px;">$100</strong> (<span id="summary-frequency">one-time</span>)
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; padding: 16px; font-size: 15px;">SUBMIT CONTRIBUTION</button>
          <div style="text-align: center; font-size: 11px; color: #888; margin-top: 15px;">
            🔒 256-bit SSL Bank-Level Encryption • Receipts Issued Automatically
          </div>
        </form>
      </div>

      <!-- Impact & Transparency Column -->
      <div>
        <!-- Mission Progress Spotlight -->
        <div style="background: #1A2E26; color: white; border-radius: 16px; padding: 40px; margin-bottom: 40px;">
          <span class="section-tag" style="color: #6DAE98;">COMMUNITY IMPACT GOAL</span>
          <h3 style="font-size: 26px; margin: 10px 0 15px;">Winter Food Drive & Shelter Kits</h3>
          <p style="opacity: 0.85; font-size: 14px; line-height: 1.7;">We are raising funds to deliver 500 emergency cold-weather kits and nutritious food boxes to families experiencing homelessness in our district.</p>
          
          <div style="margin-top: 25px;">
            <div style="display: flex; justify-content: space-between; font-size: 13px; font-weight: 700; margin-bottom: 6px;">
              <span>Raised: $42,500</span>
              <span style="color: var(--primary);">Goal: $50,000 (85%)</span>
            </div>
            <div class="progress-bar-wrap" style="background: rgba(255,255,255,0.15);">
              <div class="progress-bar-fill" style="width: 85%;"></div>
            </div>
          </div>
        </div>

        <!-- Other Ways to Give -->
        <h3 style="font-size: 24px; margin-bottom: 20px;">Other Ways To Give</h3>
        
        <div style="display: flex; flex-direction: column; gap: 18px;">
          <div style="background: white; border-radius: 12px; padding: 22px; border: 1px solid #eee; display: flex; gap: 18px; align-items: center;">
            <div style="font-size: 28px;">🏛️</div>
            <div>
              <h4 style="margin-bottom: 4px;">In Person on Sundays</h4>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Giving envelopes and collection boxes are available in the sanctuary lobby every Sunday.</p>
            </div>
          </div>

          <div style="background: white; border-radius: 12px; padding: 22px; border: 1px solid #eee; display: flex; gap: 18px; align-items: center;">
            <div style="font-size: 28px;">📮</div>
            <div>
              <h4 style="margin-bottom: 4px;">Mail a Check</h4>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Payable to: <em>Faith Connect Church</em>, 704 11th Ave, New York, NY 55416.</p>
            </div>
          </div>

          <div style="background: white; border-radius: 12px; padding: 22px; border: 1px solid #eee; display: flex; gap: 18px; align-items: center;">
            <div style="font-size: 28px;">📊</div>
            <div>
              <h4 style="margin-bottom: 4px;">Stock & Asset Giving</h4>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Appreciated securities and donor-advised funds can be donated with significant tax advantages. Contact finance@faithconnect.org.</p>
            </div>
          </div>
        </div>

        <!-- Financial Integrity Statement -->
        <div style="background: #F8F6F0; border-radius: 12px; padding: 25px; margin-top: 30px; border-left: 4px solid var(--primary);">
          <h4 style="font-size: 16px; margin-bottom: 8px;">Financial Integrity & Accountability</h4>
          <p style="font-size: 13px; color: #555; line-height: 1.6; margin: 0;">Faith Connect Church is an accredited 501(c)(3) religious nonprofit. Our finances are audited annually by an independent board of certified public accountants to ensure utmost stewardship.</p>
        </div>
      </div>

    </div>
  </section>
@endsection
