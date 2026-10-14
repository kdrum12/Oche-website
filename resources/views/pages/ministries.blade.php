@extends('layouts.app')

@section('title', 'Ministries & Groups | Faith Connect Church')

@section('content')
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="section-tag" style="color: #6DAE98;">CONNECT & GROW</span>
      <h1>OUR MINISTRIES</h1>
      <p>There is a place for everyone to belong, grow spiritually, and serve others. Find your community at Faith Connect.</p>
    </div>
  </section>

  <!-- Interactive Filter Tabs -->
  <section class="container" style="padding-top: 50px; padding-bottom: 30px;">
    <div class="filter-tabs">
      <button class="tab-btn active" data-filter="all" data-target-container="#ministries-grid">All Groups (8)</button>
      <button class="tab-btn" data-filter="kids" data-target-container="#ministries-grid">Kids & Family</button>
      <button class="tab-btn" data-filter="youth" data-target-container="#ministries-grid">Youth & NextGen</button>
      <button class="tab-btn" data-filter="adults" data-target-container="#ministries-grid">Adult Groups</button>
      <button class="tab-btn" data-filter="worship" data-target-container="#ministries-grid">Worship & Media</button>
      <button class="tab-btn" data-filter="outreach" data-target-container="#ministries-grid">Missions & Care</button>
    </div>

    <!-- Filterable Ministries Grid -->
    <div id="ministries-grid" class="filterable-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 40px;">
      
      <!-- Ministry 1: Kids -->
      <div class="filterable-card" data-category="kids" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; flex-direction: column;">
        <div style="height: 220px; overflow: hidden; position: relative;">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=600" alt="Kids Ministry" style="width: 100%; height: 100%; object-fit: cover;">
          <span style="position: absolute; top: 15px; right: 15px; background: var(--primary); color: white; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">AGES 0-11</span>
        </div>
        <div style="padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="section-tag" style="margin-bottom: 5px; font-size: 12px;">CHILDREN'S MINISTRY</span>
            <h3 style="font-size: 22px; margin-bottom: 12px;">Faith Kids Adventure</h3>
            <p style="color: var(--text-muted); font-size: 14px; line-height: 1.7;">A secure, energetic environment with Bible storytelling, music, arts and crafts during both Sunday morning services.</p>
            <div style="margin-top: 15px; font-size: 12px; color: #555;">
              <p>⏰ <strong>When:</strong> Sundays @ 9:00 AM & 11:00 AM</p>
              <p>📍 <strong>Location:</strong> Kids Wing, Ground Floor</p>
            </div>
          </div>
          <button class="btn btn-primary join-ministry-trigger" data-ministry-name="Faith Kids Adventure" style="margin-top: 25px; width: 100%;">CONNECT WITH TEAM ↗</button>
        </div>
      </div>

      <!-- Ministry 2: Youth -->
      <div class="filterable-card" data-category="youth" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; flex-direction: column;">
        <div style="height: 220px; overflow: hidden; position: relative;">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600" alt="Youth Ministry" style="width: 100%; height: 100%; object-fit: cover;">
          <span style="position: absolute; top: 15px; right: 15px; background: #364F41; color: white; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">GRADES 6-12</span>
        </div>
        <div style="padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="section-tag" style="margin-bottom: 5px; font-size: 12px;">NEXTGEN YOUTH</span>
            <h3 style="font-size: 22px; margin-bottom: 12px;">Ignite Youth Fellowship</h3>
            <p style="color: var(--text-muted); font-size: 14px; line-height: 1.7;">Empowering middle and high school students to own their faith through weekly small groups, summer camps, and authentic friendships.</p>
            <div style="margin-top: 15px; font-size: 12px; color: #555;">
              <p>⏰ <strong>When:</strong> Wednesdays @ 6:30 PM - 8:30 PM</p>
              <p>📍 <strong>Location:</strong> Youth Loft, 2nd Floor</p>
            </div>
          </div>
          <button class="btn btn-primary join-ministry-trigger" data-ministry-name="Ignite Youth Fellowship" style="margin-top: 25px; width: 100%;">CONNECT WITH TEAM ↗</button>
        </div>
      </div>

      <!-- Ministry 3: Young Adults -->
      <div class="filterable-card" data-category="youth adults" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; flex-direction: column;">
        <div style="height: 220px; overflow: hidden; position: relative;">
          <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=600" alt="Young Adults" style="width: 100%; height: 100%; object-fit: cover;">
          <span style="position: absolute; top: 15px; right: 15px; background: #0D1B1E; color: white; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">AGES 18-30</span>
        </div>
        <div style="padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="section-tag" style="margin-bottom: 5px; font-size: 12px;">YOUNG ADULTS</span>
            <h3 style="font-size: 22px; margin-bottom: 12px;">The Anchor Young Adults</h3>
            <p style="color: var(--text-muted); font-size: 14px; line-height: 1.7;">Navigating college, careers, dating, and purpose together in Christ through bi-weekly dinners and biblical study.</p>
            <div style="margin-top: 15px; font-size: 12px; color: #555;">
              <p>⏰ <strong>When:</strong> Alternate Thursdays @ 7:00 PM</p>
              <p>📍 <strong>Location:</strong> Community Coffee Lounge</p>
            </div>
          </div>
          <button class="btn btn-primary join-ministry-trigger" data-ministry-name="The Anchor Young Adults" style="margin-top: 25px; width: 100%;">CONNECT WITH TEAM ↗</button>
        </div>
      </div>

      <!-- Ministry 4: Adults / Small Groups -->
      <div class="filterable-card" data-category="adults" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; flex-direction: column;">
        <div style="height: 220px; overflow: hidden; position: relative;">
          <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&q=80&w=600" alt="Small Groups" style="width: 100%; height: 100%; object-fit: cover;">
          <span style="position: absolute; top: 15px; right: 15px; background: var(--primary); color: white; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">ALL AGES</span>
        </div>
        <div style="padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="section-tag" style="margin-bottom: 5px; font-size: 12px;">LIFE CIRCLES</span>
            <h3 style="font-size: 22px; margin-bottom: 12px;">Home Small Groups</h3>
            <p style="color: var(--text-muted); font-size: 14px; line-height: 1.7;">Circles are better than rows! Small groups of 8-12 people meeting in homes throughout the metro area for prayer and friendship.</p>
            <div style="margin-top: 15px; font-size: 12px; color: #555;">
              <p>⏰ <strong>When:</strong> Weekly on Tuesday / Thursday nights</p>
              <p>📍 <strong>Location:</strong> Various host homes city-wide</p>
            </div>
          </div>
          <button class="btn btn-primary join-ministry-trigger" data-ministry-name="Home Small Groups" style="margin-top: 25px; width: 100%;">FIND A GROUP NEAR YOU ↗</button>
        </div>
      </div>

      <!-- Ministry 5: Worship & Arts -->
      <div class="filterable-card" data-category="worship" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; flex-direction: column;">
        <div style="height: 220px; overflow: hidden; position: relative;">
          <img src="https://images.unsplash.com/photo-1465847899084-d164df4dedc6?auto=format&fit=crop&q=80&w=600" alt="Worship Team" style="width: 100%; height: 100%; object-fit: cover;">
          <span style="position: absolute; top: 15px; right: 15px; background: #1A2E26; color: white; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">CREATIVE TEAM</span>
        </div>
        <div style="padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="section-tag" style="margin-bottom: 5px; font-size: 12px;">CREATIVE EXPRESSION</span>
            <h3 style="font-size: 22px; margin-bottom: 12px;">Worship, Tech & Media</h3>
            <p style="color: var(--text-muted); font-size: 14px; line-height: 1.7;">Vocalists, musicians, sound engineers, camera operators, and lighting techs creating an environment of worship every week.</p>
            <div style="margin-top: 15px; font-size: 12px; color: #555;">
              <p>⏰ <strong>When:</strong> Rehearsals Thursday @ 7:00 PM</p>
              <p>📍 <strong>Location:</strong> Main Sanctuary</p>
            </div>
          </div>
          <button class="btn btn-primary join-ministry-trigger" data-ministry-name="Worship, Tech & Media" style="margin-top: 25px; width: 100%;">AUDITION / JOIN TECH ↗</button>
        </div>
      </div>

      <!-- Ministry 6: Missions & Outreach -->
      <div class="filterable-card" data-category="outreach" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; flex-direction: column;">
        <div style="height: 220px; overflow: hidden; position: relative;">
          <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&q=80&w=600" alt="Outreach" style="width: 100%; height: 100%; object-fit: cover;">
          <span style="position: absolute; top: 15px; right: 15px; background: #EB5E28; color: white; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">LOCAL & GLOBAL</span>
        </div>
        <div style="padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="section-tag" style="margin-bottom: 5px; font-size: 12px;">COMPASSION IN ACTION</span>
            <h3 style="font-size: 22px; margin-bottom: 12px;">City Hope Food Pantry & Missions</h3>
            <p style="color: var(--text-muted); font-size: 14px; line-height: 1.7;">Serving over 400 families monthly with groceries, clothing drives, and seasonal homeless shelter warmth packs.</p>
            <div style="margin-top: 15px; font-size: 12px; color: #555;">
              <p>⏰ <strong>When:</strong> Distribution every Saturday @ 9:00 AM</p>
              <p>📍 <strong>Location:</strong> Community Outreach Annex</p>
            </div>
          </div>
          <button class="btn btn-primary join-ministry-trigger" data-ministry-name="City Hope Food Pantry & Missions" style="margin-top: 25px; width: 100%;">VOLUNTEER WITH US ↗</button>
        </div>
      </div>

    </div>
  </section>

  <!-- Interactive How to Serve Steps -->
  <section style="background: #FFFBF5; padding: 100px 5%;">
    <div class="container" style="text-align: center;">
      <span class="section-tag">GETTING INVOLVED</span>
      <h2 style="font-size: 44px; margin-bottom: 20px;">3 SIMPLE STEPS TO JOIN A TEAM</h2>
      <p style="max-width: 600px; margin: 0 auto 60px; color: var(--text-muted);">Serving is one of the best ways to meet lifelong friends and make an eternal impact.</p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px;">
        <div style="background: white; padding: 35px; border-radius: 12px; border: 1px solid #eee;">
          <div style="width: 50px; height: 50px; background: #FFF0EB; color: var(--primary); font-size: 24px; font-weight: 700; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">1</div>
          <h4 style="margin-bottom: 10px;">Express Interest</h4>
          <p style="font-size: 14px; color: var(--text-muted);">Click on any ministry card above or let us know at the Connect Corner in the lobby.</p>
        </div>

        <div style="background: white; padding: 35px; border-radius: 12px; border: 1px solid #eee;">
          <div style="width: 50px; height: 50px; background: #FFF0EB; color: var(--primary); font-size: 24px; font-weight: 700; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">2</div>
          <h4 style="margin-bottom: 10px;">Short Orientation</h4>
          <p style="font-size: 14px; color: var(--text-muted);">Spend 20 minutes shadowing a leader to find the role that fits your gifts and schedule.</p>
        </div>

        <div style="background: white; padding: 35px; border-radius: 12px; border: 1px solid #eee;">
          <div style="width: 50px; height: 50px; background: #FFF0EB; color: var(--primary); font-size: 24px; font-weight: 700; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">3</div>
          <h4 style="margin-bottom: 10px;">Start Serving & Flourish</h4>
          <p style="font-size: 14px; color: var(--text-muted);">Begin serving once or twice a month while enjoying vibrant community and joy.</p>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('modals')
  <!-- Interactive Ministry Connection Modal -->
  <div id="join-ministry-modal" class="modal-backdrop">
    <div class="modal-box">
      <button class="modal-close" aria-label="Close modal">&times;</button>
      <span class="section-tag">Ministry Connection</span>
      <h3 style="font-size: 24px; margin: 10px 0;">Connect With <span id="modal-ministry-title" style="color: var(--primary);">Ministry</span></h3>
      <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 25px;">Fill in your details and our ministry coordinator will get in touch with you this week!</p>

      <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <input type="hidden" name="type" value="ministry">
        
        <div class="form-group">
          <label class="form-label">Full Name</label>
          <input type="text" name="name" required class="form-control" placeholder="Your name">
        </div>

        <div class="form-group">
          <label class="form-label">Email Address</label>
          <input type="email" name="email" required class="form-control" placeholder="your@email.com">
        </div>

        <div class="form-group">
          <label class="form-label">Questions or Availability</label>
          <textarea name="message" id="modal-ministry-message" rows="3" class="form-control" placeholder="I would love to learn more about joining this group..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">SUBMIT CONNECTION REQUEST</button>
      </form>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  document.querySelectorAll('.join-ministry-trigger').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const ministryName = btn.dataset.ministryName;
      document.getElementById('modal-ministry-title').textContent = ministryName;
      document.getElementById('modal-ministry-message').value = "Hi! I'm interested in getting involved with " + ministryName + ". Please share details on how I can participate!";
      openModal('#join-ministry-modal');
    });
  });
</script>
@endpush
