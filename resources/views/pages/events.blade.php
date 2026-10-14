@extends('layouts.app')

@section('title', 'Upcoming Events | Faith Connect Church')

@section('content')
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="section-tag" style="color: #6DAE98;">CALENDAR & GATHERINGS</span>
      <h1>UPCOMING EVENTS</h1>
      <p>Life is meant to be shared in community. Join us for worship nights, Bible studies, community outreach, and family dinners.</p>
    </div>
  </section>

  <!-- Next Big Event Spotlight -->
  <section class="container" style="padding-top: 60px; padding-bottom: 20px;">
    <div style="background: linear-gradient(135deg, #1A1A1A 0%, #293830 100%); border-radius: 20px; padding: 45px; color: white; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
      <div style="flex: 1.5; min-width: 300px;">
        <span class="section-tag" style="color: var(--primary); margin-bottom: 10px;">FEATURED COMMUNITY NIGHT</span>
        <h2 style="font-size: 36px; margin-bottom: 15px;">All-Church Night of Worship & Prayer</h2>
        <p style="opacity: 0.85; font-size: 16px; line-height: 1.7; max-width: 650px;">An evening of extended praise, prophetic prayer, and communion for all ages. Childcare provided for ages 0-5. Complimentary coffee and dessert following service.</p>
        <div style="margin-top: 20px; display: flex; gap: 20px; font-size: 14px; flex-wrap: wrap;">
          <span>📅 <strong>Friday, Nov 28</strong></span>
          <span>⏰ <strong>7:00 PM - 9:00 PM</strong></span>
          <span>📍 <strong>Main Sanctuary & Courtyard</strong></span>
        </div>
      </div>
      <div style="text-align: center;">
        <button class="btn btn-primary rsvp-event-btn" data-event-title="All-Church Night of Worship & Prayer" style="padding: 16px 36px; font-size: 15px;">RSVP FREE ENTRY</button>
        <div style="font-size: 12px; opacity: 0.6; margin-top: 10px;">Free admission • All are welcome</div>
      </div>
    </div>
  </section>

  <!-- Interactive Filter Tabs -->
  <section class="container" style="padding-bottom: 100px;">
    <div class="filter-tabs">
      <button class="tab-btn active" data-filter="all" data-target-container="#events-list-container">All Gatherings</button>
      <button class="tab-btn" data-filter="worship" data-target-container="#events-list-container">Worship & Prayer</button>
      <button class="tab-btn" data-filter="fellowship" data-target-container="#events-list-container">Fellowship & Dinners</button>
      <button class="tab-btn" data-filter="youth" data-target-container="#events-list-container">NextGen & Kids</button>
      <button class="tab-btn" data-filter="outreach" data-target-container="#events-list-container">City Outreach</button>
    </div>

    <!-- Events List Container -->
    <div id="events-list-container" class="filterable-grid" style="display: flex; flex-direction: column; gap: 20px; margin-top: 30px;">
      
      <!-- Event 1 -->
      <div class="filterable-card event-row" data-category="fellowship" style="border: 1px solid #eee;">
        <div class="event-date">
          <span style="color: var(--primary);">TUE</span>
          <h4>14</h4>
          <span style="font-size: 11px; opacity: 0.6;">NOV</span>
        </div>
        <div style="flex: 2;">
          <span style="font-size: 11px; font-weight: 700; color: var(--primary); text-transform: uppercase;">FELLOWSHIP • WEEKLY</span>
          <h3 style="margin: 6px 0 8px;">Weekly Bible Study Group (Book of Romans)</h3>
          <p style="font-size: 14px; color: var(--text-muted); line-height: 1.6;">Engaging table discussions digging into Paul's Epistle to the Romans with practical real-world application.</p>
          <div style="margin-top: 8px; font-size: 12px; color: #555;">
            <span>⏰ 7:00 PM - 8:30 PM • 📍 Fellowship Hall • Lead by Elder Mark Roberts</span>
          </div>
        </div>
        <button class="btn btn-primary rsvp-event-btn" data-event-title="Weekly Bible Study Group (Book of Romans)" style="font-size: 12px; padding: 12px 24px;">RSVP / REGISTER</button>
      </div>

      <!-- Event 2 -->
      <div class="filterable-card event-row" data-category="youth fellowship" style="border: 1px solid #eee;">
        <div class="event-date">
          <span style="color: var(--primary);">SAT</span>
          <h4>18</h4>
          <span style="font-size: 11px; opacity: 0.6;">NOV</span>
        </div>
        <div style="flex: 2;">
          <span style="font-size: 11px; font-weight: 700; color: var(--primary); text-transform: uppercase;">YOUNG ADULTS</span>
          <h3 style="margin: 6px 0 8px;">Young Adults Acoustic Connect & Board Games</h3>
          <p style="font-size: 14px; color: var(--text-muted); line-height: 1.6;">Gathering for young professionals and university students. Fresh pizza, great conversations, acoustic worship and games.</p>
          <div style="margin-top: 8px; font-size: 12px; color: #555;">
            <span>⏰ 6:30 PM - 9:00 PM • 📍 Youth Lounge • Host: Samantha Wiley</span>
          </div>
        </div>
        <button class="btn btn-primary rsvp-event-btn" data-event-title="Young Adults Acoustic Connect & Board Games" style="font-size: 12px; padding: 12px 24px;">RSVP / REGISTER</button>
      </div>

      <!-- Event 3 -->
      <div class="filterable-card event-row" data-category="outreach" style="border: 1px solid #eee;">
        <div class="event-date">
          <span style="color: var(--primary);">SAT</span>
          <h4>22</h4>
          <span style="font-size: 11px; opacity: 0.6;">NOV</span>
        </div>
        <div style="flex: 2;">
          <span style="font-size: 11px; font-weight: 700; color: var(--primary); text-transform: uppercase;">COMMUNITY OUTREACH</span>
          <h3 style="margin: 6px 0 8px;">City Hope Thanksgiving Food Distribution</h3>
          <p style="font-size: 14px; color: var(--text-muted); line-height: 1.6;">Packing and distributing 350 Thanksgiving meal grocery boxes for local families in need across our district.</p>
          <div style="margin-top: 8px; font-size: 12px; color: #555;">
            <span>⏰ 8:30 AM - 1:00 PM • 📍 Community Annex • Open to all volunteers</span>
          </div>
        </div>
        <button class="btn btn-primary rsvp-event-btn" data-event-title="City Hope Thanksgiving Food Distribution" style="font-size: 12px; padding: 12px 24px;">VOLUNTEER RSVP</button>
      </div>

      <!-- Event 4 -->
      <div class="filterable-card event-row" data-category="worship" style="border: 1px solid #eee;">
        <div class="event-date">
          <span style="color: var(--primary);">FRI</span>
          <h4>28</h4>
          <span style="font-size: 11px; opacity: 0.6;">NOV</span>
        </div>
        <div style="flex: 2;">
          <span style="font-size: 11px; font-weight: 700; color: var(--primary); text-transform: uppercase;">SPECIAL GATHERING</span>
          <h3 style="margin: 6px 0 8px;">Night of Worship & Fellowship</h3>
          <p style="font-size: 14px; color: var(--text-muted); line-height: 1.6;">Extended live worship, scripture readings, testimony times, and prayer for our city.</p>
          <div style="margin-top: 8px; font-size: 12px; color: #555;">
            <span>⏰ 7:00 PM - 9:00 PM • 📍 Main Sanctuary</span>
          </div>
        </div>
        <button class="btn btn-primary rsvp-event-btn" data-event-title="Night of Worship & Fellowship" style="font-size: 12px; padding: 12px 24px;">RSVP / REGISTER</button>
      </div>

    </div>
  </section>
@endsection

@section('modals')
  <!-- Interactive Event RSVP Modal -->
  <div id="event-rsvp-modal" class="modal-backdrop">
    <div class="modal-box">
      <button class="modal-close" aria-label="Close modal">&times;</button>
      <span class="section-tag">Event Registration</span>
      <h3 style="font-size: 24px; margin: 10px 0;">RSVP For <span id="rsvp-modal-event-name" style="color: var(--primary);">Event</span></h3>
      <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 25px;">Let us know you're coming so we can prepare seating and hospitality materials!</p>

      <form action="{{ route('events.rsvp') }}" method="POST">
        @csrf
        <input type="hidden" name="event_title" id="rsvp-event-title-input" value="">
        
        <div class="form-group">
          <label class="form-label">Full Name</label>
          <input type="text" name="name" required class="form-control" placeholder="John Doe">
        </div>

        <div class="form-group">
          <label class="form-label">Email Address</label>
          <input type="email" name="email" required class="form-control" placeholder="john@example.com">
        </div>

        <div class="form-group">
          <label class="form-label">Total Number of Attendees</label>
          <input type="number" name="guests" class="form-control" value="1" min="1" max="10">
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">CONFIRM MY RSVP</button>
      </form>
    </div>
  </div>
@endsection
