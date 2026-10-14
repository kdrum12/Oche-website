@extends('layouts.app')

@section('title', 'Faith Connect | Your Community. Your Church.')

@section('content')
  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-green-shape">
      <div class="sunday-floating">
        <span class="section-tag" style="margin-bottom: 5px; color: #fff; opacity: 0.8;">9:00 AND 11:00 AM</span>
        <p class="script-text" style="font-size: 18px; margin: 0; color: #FFD700;">Join Us</p>
        <h3>SUNDAYS</h3>
        <p style="font-size: 10px; opacity: 0.7; margin-top: 10px;">On demand starting at 5:00 p.m.</p>
      </div>
    </div>
    <div class="container hero-wrapper">
      <div class="hero-content">
        <h1>YOUR COMMUNITY.<br><span>YOUR CHURCH.</span></h1>
        <p>Connecting people to God and to each other through authentic worship, discipleship, and community outreach.</p>
        <div class="hero-btns">
          <a href="{{ route('events') }}" class="btn btn-primary" style="background: #F05A28; border: none;">JOIN US THIS SUNDAY</a>
          <button class="btn btn-outline play-sermon-btn" data-title="Walking in Faith: Trusting God in Uncertain Times" data-speaker="Pastor Craig Groeschel" data-date="Latest Sunday Message" data-scripture="Proverbs 3:5-6" style="background: rgba(255,255,255,0.1); border: 1px solid white;">WATCH LIVE ▷</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Welcome Section -->
  <section class="welcome container" id="about">
    <div class="welcome-img-stack">
      <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&q=80&w=1000" alt="Church" class="img-main">
      <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?auto=format&fit=crop&q=80&w=600" alt="Hands" class="img-sub">
    </div>
    <div class="welcome-content">
      <span class="section-tag">Welcome To</span>
      <h2>FAITH CONNECT CHURCH</h2>
      <p>We are a warm and welcoming community of believers committed to growing in faith, serving others, and sharing the love of Christ. Whether you're exploring faith for the first time or looking for a church to call home, we invite you to join us.</p>
      <div style="margin-top: 30px; display: flex; align-items: center; gap: 30px; flex-wrap: wrap;">
         <div>
            <p class="script-text" style="margin-bottom: 5px;">You belong here.</p>
            <a href="{{ route('about') }}" class="btn btn-primary" style="font-size: 12px; padding: 10px 20px;">EXPLORE OUR STORY →</a>
         </div>
         <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300" alt="Community" style="border-radius: 10px; width: 140px; height: 100px; object-fit: cover;">
      </div>
    </div>
  </section>

  <!-- Community Grid -->
  <section class="about-split container">
    <div class="about-img">
      <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?auto=format&fit=crop&q=80&w=1000" alt="Worship">
    </div>
    <div class="about-text">
       <span class="section-tag">Who we are</span>
       <h2 style="font-size: 40px; margin-bottom: 20px;">A CHRIST-CENTERED COMMUNITY FOR WORSHIP & GROWTH</h2>
       <p>Community Church is an independent, Christ-centered congregation dedicated to worship, spiritual growth, and serving our neighbors. We believe in creating a space where people can authentically encounter God, deepen their faith, and build meaningful relationships.</p>
       <a href="{{ route('about') }}" class="btn btn-primary" style="margin-top: 30px;">About Us</a>
    </div>
  </section>

  <!-- Ministries Preview -->
  <section class="ministries" id="ministries">
    <div class="container">
      <div class="ministry-header">
         <h1 style="font-size: 54px;">OUR MINISTRIES</h1>
         <p class="script-text">You're always welcome here.</p>
      </div>
      <div class="ministry-grid">
        <div class="ministry-card">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=600" alt="Children">
          <div class="ministry-overlay">
            <h3>Children's Ministry</h3>
            <a href="{{ route('ministries') }}#children" style="color: var(--primary); font-size: 12px; font-weight: bold;">DISCOVER PROGRAM ↗</a>
          </div>
        </div>
        <div class="ministry-card">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600" alt="Youth">
          <div class="ministry-overlay">
            <h3>Youth Ministry</h3>
            <a href="{{ route('ministries') }}#youth" style="color: var(--primary); font-size: 12px; font-weight: bold;">DISCOVER PROGRAM ↗</a>
          </div>
        </div>
        <div class="ministry-card">
          <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=600" alt="Small Groups">
          <div class="ministry-overlay">
            <h3>Small Groups</h3>
            <a href="{{ route('ministries') }}#small-groups" style="color: var(--primary); font-size: 12px; font-weight: bold;">DISCOVER PROGRAM ↗</a>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 50px;">
        <a href="{{ route('ministries') }}" class="btn btn-primary">ALL MINISTRIES & GROUPS</a>
      </div>
    </div>
  </section>

  <!-- Featured Sermons Section with Interactive Player -->
  <section id="sermons" style="background: #1A2E26; color: white; padding: 100px 5%;">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 20px;">
        <div>
          <span class="section-tag" style="color: #6DAE98;">SERVING WITH LOVE</span>
          <h2 style="font-size: 50px;">FEATURED SERMONS</h2>
        </div>
        <div style="display: flex; gap: 12px;">
           <a href="{{ route('sermons') }}" class="btn btn-outline" style="border-radius: 50px; padding: 10px 24px; font-size: 13px;">BROWSE ALL SERMONS ↗</a>
        </div>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Sermon 1 -->
        <div class="sermon-card" style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 16px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="position: relative; border-radius: 12px; overflow: hidden; margin-bottom: 20px;">
             <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=600" alt="Sermon 1">
             <div style="position: absolute; bottom: 15px; left: 15px; display: flex; gap: 10px;">
                <button class="btn btn-primary play-sermon-btn" data-title="Walking in Faith: Trusting God in Uncertain Times" data-speaker="Pastor Craig Groeschel" data-date="November 22, 2025" data-scripture="Proverbs 3:5-6" style="padding: 6px 14px; font-size: 11px; border-radius: 4px;">▷ WATCH</button>
                <button class="btn btn-outline play-sermon-btn" data-title="Walking in Faith: Trusting God in Uncertain Times" data-speaker="Pastor Craig Groeschel" data-date="November 22, 2025" data-scripture="Proverbs 3:5-6" style="padding: 6px 14px; font-size: 11px; border-radius: 4px; background: rgba(0,0,0,0.6);">🎵 LISTEN</button>
             </div>
          </div>
          <p style="font-size: 11px; opacity: 0.6; text-transform: uppercase; letter-spacing: 1px;">NOVEMBER 22, 2025 • PROVERBS 3:5-6</p>
          <h4 style="margin: 10px 0; font-size: 20px;">Walking in Faith: Trusting God in Uncertain Times</h4>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 20px;">
             <div style="display: flex; align-items: center; gap: 10px; font-size: 13px;">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100" alt="Speaker" style="width: 34px; height: 34px; border-radius: 50%;">
                <span>Pastor Craig Groeschel</span>
             </div>
             <button class="play-sermon-btn" data-title="Walking in Faith: Trusting God in Uncertain Times" data-speaker="Pastor Craig Groeschel" data-date="November 22, 2025" data-scripture="Proverbs 3:5-6" style="background: none; border: none; color: var(--primary); cursor: pointer; font-weight: 700; font-size: 12px;">PLAY NOW ↗</button>
          </div>
        </div>

        <!-- Sermon 2 -->
        <div class="sermon-card" style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 16px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="position: relative; border-radius: 12px; overflow: hidden; margin-bottom: 20px;">
             <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=600" alt="Sermon 2">
             <div style="position: absolute; bottom: 15px; left: 15px; display: flex; gap: 10px;">
                <button class="btn btn-primary play-sermon-btn" data-title="The Power of Prayer: Connecting with God Daily" data-speaker="Samantha Wiley" data-date="November 15, 2025" data-scripture="Philippians 4:6-7" style="padding: 6px 14px; font-size: 11px; border-radius: 4px;">▷ WATCH</button>
                <button class="btn btn-outline play-sermon-btn" data-title="The Power of Prayer: Connecting with God Daily" data-speaker="Samantha Wiley" data-date="November 15, 2025" data-scripture="Philippians 4:6-7" style="padding: 6px 14px; font-size: 11px; border-radius: 4px; background: rgba(0,0,0,0.6);">🎵 LISTEN</button>
             </div>
          </div>
          <p style="font-size: 11px; opacity: 0.6; text-transform: uppercase; letter-spacing: 1px;">NOVEMBER 15, 2025 • PHILIPPIANS 4:6-7</p>
          <h4 style="margin: 10px 0; font-size: 20px;">The Power of Prayer: Connecting with God Daily</h4>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 20px;">
             <div style="display: flex; align-items: center; gap: 10px; font-size: 13px;">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=100" alt="Speaker" style="width: 34px; height: 34px; border-radius: 50%;">
                <span>Associate Pastor Samantha Wiley</span>
             </div>
             <button class="play-sermon-btn" data-title="The Power of Prayer: Connecting with God Daily" data-speaker="Samantha Wiley" data-date="November 15, 2025" data-scripture="Philippians 4:6-7" style="background: none; border: none; color: var(--primary); cursor: pointer; font-weight: 700; font-size: 12px;">PLAY NOW ↗</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Countdown to Upcoming Sunday Service -->
  <section class="countdown-section">
    <div class="container">
      <p style="text-transform: uppercase; font-size: 14px; font-weight: bold; margin-bottom: 20px; letter-spacing: 1px;">Don't miss the next gathering</p>
      <div class="timer">
        <div class="timer-item"><h2 id="days">00</h2><span>Days</span></div>
        <div class="timer-item"><h2 id="hours">00</h2><span>Hrs</span></div>
        <div class="timer-item"><h2 id="mins">00</h2><span>Mins</span></div>
        <div class="timer-item"><h2 id="secs">00</h2><span>Secs</span></div>
      </div>
      <p class="script-text" style="font-size: 32px; margin-top: 30px;">Be the light</p>
      <a href="{{ route('events') }}" class="btn btn-primary" style="margin-top: 20px;">PLAN YOUR VISIT THIS SUNDAY</a>
    </div>
  </section>

  <!-- Upcoming Events with Interactive RSVP Modal -->
  <section class="container" id="events" style="padding-top: 100px;">
    <div style="text-align: center; margin-bottom: 60px;">
      <h2 style="font-size: clamp(38px, 6vw, 64px); line-height: 0.9;">UPCOMING <span>EVENTS</span></h2>
      <p class="script-text">Come as you are.</p>
      <p style="max-width: 600px; margin: 0 auto; color: var(--text-muted);">Stay connected with what’s happening at Faith Connect! Worship nights, Bible studies, community barbecues and family outreach.</p>
    </div>
    
    <div class="events-list">
      <!-- Event 1 -->
      <div class="event-row">
        <div class="event-date">
          <span>TUE</span>
          <h4>14</h4>
        </div>
        <div style="flex: 2;">
          <h3 style="margin-bottom: 5px;">Weekly Bible Study Group</h3>
          <p style="font-size: 14px; color: var(--text-muted);">Dive deeper into God’s Word with us! Exploring the Book of Romans with fellowship and discussion.</p>
          <span style="font-size: 12px; color: var(--primary); font-weight: 600; display: inline-block; margin-top: 6px;">📍 Fellowship Hall • 7:00 PM</span>
        </div>
        <button class="btn btn-outline rsvp-event-btn" data-event-title="Weekly Bible Study Group" style="border: 1px solid var(--primary); color: var(--primary); font-size: 12px;">RSVP / REGISTER</button>
      </div>

      <!-- Event 2 -->
      <div class="event-row">
        <div class="event-date">
          <span>SAT</span>
          <h4>18</h4>
        </div>
        <div style="flex: 2;">
          <h3 style="margin-bottom: 5px;">Young Adults Connect & Worship Night</h3>
          <p style="font-size: 14px; color: var(--text-muted);">An acoustic night of praise, prayer, pizza, and meaningful community connections for ages 18-30.</p>
          <span style="font-size: 12px; color: var(--primary); font-weight: 600; display: inline-block; margin-top: 6px;">📍 Youth Center • 6:30 PM</span>
        </div>
        <button class="btn btn-outline rsvp-event-btn" data-event-title="Young Adults Connect & Worship Night" style="border: 1px solid var(--primary); color: var(--primary); font-size: 12px;">RSVP / REGISTER</button>
      </div>
    </div>

    <div style="text-align: center; margin-top: 40px;">
       <a href="{{ route('events') }}" class="btn btn-primary">VIEW FULL EVENT CALENDAR</a>
    </div>
  </section>

  <!-- Pastors Section -->
  <section class="pastors-section container">
    <div class="pastors-sidebar">
      <div class="pastor-badge">LEADING WITH LOVE</div>
      <h2 class="pastors-title">MEET OUR<br><span>PASTORS</span></h2>
      <a href="{{ route('about') }}#pastors" class="pastors-link">MEET FULL TEAM ↗</a>
    </div>
    
    <div class="pastors-grid">
      <div class="pastor-card">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=800" alt="Craig">
        <div class="pastor-info">
          <h4>Craig Groeschel</h4>
          <p>LEAD PASTOR</p>
        </div>
      </div>
      <div class="pastor-card">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=800" alt="Jerry">
        <div class="pastor-info">
          <h4>Jerry Hurley</h4>
          <p>SENIOR PRIEST</p>
        </div>
      </div>
      <div class="pastor-card">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=800" alt="Samantha">
        <div class="pastor-info">
          <h4>Samantha Wiley</h4>
          <p>ASSOCIATE PASTOR</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Support Our Mission Preview -->
  <section id="donations" style="background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('https://images.unsplash.com/photo-1767600468103-c0e8983ac2dd?q=80&w=870&auto=format&fit=crop') center/cover; padding: 120px 5%; color: white;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; gap: 80px; flex-wrap: wrap;">
      <div style="flex: 1; min-width: 300px;">
         <span class="section-tag" style="color: #FFB088;">GENEROSITY CHANGES LIVES</span>
         <h2 style="font-size: clamp(36px, 5vw, 60px); line-height: 1.05;">SUPPORT OUR MISSION</h2>
         <p style="margin: 25px 0; opacity: 0.85; line-height: 1.8;">Your generosity empowers community food banks, supports missionary partners across nations, and keeps our youth mentoring programs vibrant.</p>
         <a href="{{ route('donations') }}" class="btn btn-outline">EXPLORE GIVING OPTIONS ↗</a>
      </div>

      <div style="flex: 1; min-width: 300px; max-width: 520px; background: white; color: black; padding: 45px; border-radius: 16px; box-shadow: 0 20px 50px rgba(0,0,0,0.4);">
         <h3 style="margin-bottom: 10px; font-size: 24px;">Quick Online Giving</h3>
         <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 25px;">Support local outreach & weekly ministries securely.</p>
         
         <form action="{{ route('donations.process') }}" method="POST">
           @csrf
           <input type="hidden" name="frequency" id="donation-frequency-input" value="one-time">
           <input type="hidden" name="fund" value="General Offering">
           <input type="hidden" name="amount" id="donation-amount-input" value="50">

           <div class="frequency-toggle">
              <button type="button" class="freq-btn active" data-freq="one-time">One-Time</button>
              <button type="button" class="freq-btn" data-freq="monthly">Monthly</button>
           </div>

           <div class="amount-grid">
              <button type="button" class="amount-btn" data-amount="25">$25</button>
              <button type="button" class="amount-btn active" data-amount="50">$50</button>
              <button type="button" class="amount-btn" data-amount="100">$100</button>
           </div>

           <div class="form-group">
              <label class="form-label">Custom Amount ($ USD)</label>
              <input type="number" id="custom-amount" class="form-control" value="50" min="1" step="1">
           </div>

           <div style="background: #FAF6F0; padding: 15px; border-radius: 8px; margin-bottom: 20px; font-size: 13px;">
              <span>Gift Summary: <strong id="summary-amount" style="color: var(--primary);">$50</strong> (<span id="summary-frequency">one-time</span>)</span>
           </div>

           <button type="submit" class="btn btn-primary" style="width: 100%;">PROCEED TO GIVE</button>
           <p style="text-align: center; font-size: 11px; margin-top: 15px; opacity: 0.6;">🔒 Bank-Grade 256-bit Encrypted Transaction</p>
         </form>
      </div>
    </div>
  </section>

  <!-- Interactive FAQ Accordion -->
  <section class="container" style="padding: 100px 0;">
    <div style="display: flex; gap: 80px; flex-wrap: wrap;">
      <div style="flex: 1; min-width: 280px;">
        <span class="section-tag">Seek. Learn. Grow.</span>
        <h2 style="font-size: 44px; margin-bottom: 20px;">FREQUENTLY ASKED QUESTIONS</h2>
        <p style="color: var(--text-muted); line-height: 1.8;">Have questions before attending? We want you to feel right at home. Here are common questions from first-time visitors.</p>
        <div style="margin-top: 30px;">
          <a href="{{ route('contact') }}" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">ASK A QUESTION ↗</a>
        </div>
      </div>

      <div style="flex: 1.3; min-width: 300px;">
         <div class="accordion">
            <div class="accordion-item open">
              <div class="accordion-header">
                <span>What should I expect on my first visit?</span>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-body">
                You'll be greeted with a warm smile and free coffee! Services last about 70 minutes with inspiring live worship music and practical biblical teaching. Dress is casual—come exactly as you are!
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <span>Do you have fun programs for kids?</span>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-body">
                Yes! Faith Kids provides secure, age-appropriate environments for infants through 5th graders during all Sunday services. All our volunteers undergo background checks and safety training.
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <span>How can I get involved or join a group?</span>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-body">
                We have over 20 small groups meeting across the city on weeknights! Check out our Ministries page or visit the Connect Corner in the lobby after Sunday service.
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <span>Where can I park on Sunday morning?</span>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-body">
                We have dedicated guest parking directly in front of the main building with parking greeters to help guide you to an open spot easily.
              </div>
            </div>
         </div>
      </div>
    </div>
  </section>
@endsection

@section('modals')
  <!-- Interactive Sermon Player Modal -->
  <div id="sermon-player-modal" class="modal-backdrop">
    <div class="modal-box">
      <button class="modal-close" aria-label="Close modal">&times;</button>
      <span class="section-tag" id="modal-sermon-date">Latest Message</span>
      <h3 id="modal-sermon-title" style="font-size: 26px; margin: 10px 0;">Sermon Title</h3>
      <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 20px;">
        Speaker: <strong id="modal-sermon-speaker">Pastor</strong> | Scripture: <span id="modal-sermon-scripture">Bible Reference</span>
      </p>

      <div class="sermon-media-player">
        <button class="media-play-btn" onclick="this.textContent = this.textContent === '▷' ? '⏸' : '▷'">▷</button>
        <div style="flex: 1;">
          <div style="font-weight: 700; font-size: 14px;">Playing Audio Stream</div>
          <div style="font-size: 12px; opacity: 0.6; margin-top: 4px;">Live recording from Faith Connect Sanctuary</div>
          <div class="progress-bar-wrap" style="background: rgba(255,255,255,0.2);">
            <div class="progress-bar-fill" style="width: 35%;"></div>
          </div>
          <div style="display: flex; justify-content: space-between; font-size: 11px; opacity: 0.7;">
            <span>14:20</span>
            <span>41:05</span>
          </div>
        </div>
      </div>

      <div style="border-top: 1px solid #eee; padding-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: gap;">
        <span style="font-size: 13px; color: #666;">Want sermon outlines?</span>
        <a href="{{ route('sermons') }}" class="btn btn-outline" style="border-color: #ddd; color: #333; font-size: 12px; padding: 8px 16px;">VIEW ALL SERMON NOTES ↗</a>
      </div>
    </div>
  </div>

  <!-- Interactive Event RSVP Modal -->
  <div id="event-rsvp-modal" class="modal-backdrop">
    <div class="modal-box">
      <button class="modal-close" aria-label="Close modal">&times;</button>
      <span class="section-tag">Event Registration</span>
      <h3 style="font-size: 24px; margin: 10px 0;">RSVP For <span id="rsvp-modal-event-name" style="color: var(--primary);">Event</span></h3>
      <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 25px;">Let us know you're coming so our hospitality team can prepare refreshments!</p>

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
          <label class="form-label">Number of Attendees</label>
          <input type="number" name="guests" class="form-control" value="1" min="1" max="10">
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">CONFIRM MY RSVP</button>
      </form>
    </div>
  </div>
@endsection
