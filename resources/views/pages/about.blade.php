@extends('layouts.app')

@section('title', 'About Us | Faith Connect Church')

@section('content')
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="section-tag" style="color: #6DAE98;">WHO WE ARE</span>
      <h1>OUR STORY & MISSION</h1>
      <p>A Christ-centered, multi-generational community devoted to authentic worship, spiritual growth, and compassionate neighborly love.</p>
    </div>
  </section>

  <!-- Church Story Section -->
  <section class="welcome container">
    <div class="welcome-img-stack">
      <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&q=80&w=1000" alt="Church Worship" class="img-main">
      <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?auto=format&fit=crop&q=80&w=600" alt="Community prayer" class="img-sub">
    </div>
    <div class="welcome-content">
      <span class="section-tag">Since 2012</span>
      <h2>PLANTED WITH PURPOSE</h2>
      <p>Faith Connect started over a decade ago in a living room with twelve families passionate about creating a church where anyone—regardless of background or past—could encounter Jesus and experience unconditional belonging.</p>
      <p style="margin-top: 15px;">Today, we gather hundreds weekly across two Sunday services, supporting local food pantries, global mission initiatives, and life-giving small groups across our city.</p>
      <div style="margin-top: 30px; display: flex; gap: 20px;">
        <div style="border-left: 3px solid var(--primary); padding-left: 15px;">
          <h3 style="font-size: 28px; margin: 0; color: var(--primary);">1,200+</h3>
          <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Weekly Attendees</p>
        </div>
        <div style="border-left: 3px solid var(--primary); padding-left: 15px;">
          <h3 style="font-size: 28px; margin: 0; color: var(--primary);">25+</h3>
          <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Active Small Groups</p>
        </div>
        <div style="border-left: 3px solid var(--primary); padding-left: 15px;">
          <h3 style="font-size: 28px; margin: 0; color: var(--primary);">14</h3>
          <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Global Mission Partners</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive What We Believe Accordion -->
  <section style="background: #FFFBF5; padding: 100px 5%;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <span class="section-tag">OUR FOUNDATION</span>
        <h2 style="font-size: 46px;">WHAT WE BELIEVE</h2>
        <p style="max-width: 600px; margin: 0 auto; color: var(--text-muted);">Rooted in historic orthodox Christian faith, guided by the Scriptures and motivated by Christ's grace.</p>
      </div>

      <div class="accordion" style="max-width: 850px; margin: 0 auto;">
        <div class="accordion-item open">
          <div class="accordion-header">
            <span>The Scriptures</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            We believe the Holy Bible is the inspired Word of God, without error in its original manuscripts, and the supreme authority in all matters of faith, doctrine, and daily Christian living.
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <span>The Nature of God (The Trinity)</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            We believe in one God, eternally existent in three distinct persons: Father, Son, and Holy Spirit. Equal in essence, divine perfection, and eternal glory.
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <span>Salvation Through Grace</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            We believe that salvation is a gift of God's unmerited grace through faith alone in Jesus Christ, who died on the cross for our sins and was resurrected bodily on the third day.
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <span>The Church & Community</span>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-body">
            We believe the church is the living body of Christ on Earth, designed to worship God, shepherd believers in discipleship, and serve the marginalized with compassion and justice.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leadership Team with Interactive Bio Modal -->
  <section class="container" id="pastors" style="padding: 100px 0;">
    <div style="text-align: center; margin-bottom: 60px;">
      <span class="section-tag">FAITHFUL STEWARDS</span>
      <h2 style="font-size: 46px;">OUR PASTORAL LEADERSHIP</h2>
      <p style="max-width: 600px; margin: 0 auto; color: var(--text-muted);">Meet the devoted pastors and ministry leaders who serve our church family each week.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
      <!-- Pastor 1 -->
      <div class="pastor-card" style="box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=800" alt="Craig Groeschel">
        <div class="pastor-info">
          <h4>Craig Groeschel</h4>
          <p>LEAD PASTOR</p>
          <button class="btn btn-primary open-bio-btn" 
                  data-name="Craig Groeschel" 
                  data-role="Lead Pastor" 
                  data-bio="Pastor Craig has been serving Faith Connect since its founding. Holding a Master of Divinity from Trinity Seminary, he is passionate about expository preaching, leadership development, and seeing families restored through the gospel."
                  data-img="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=800"
                  style="margin-top: 15px; padding: 8px 16px; font-size: 11px;">READ FULL BIO ↗</button>
        </div>
      </div>

      <!-- Pastor 2 -->
      <div class="pastor-card" style="box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=800" alt="Jerry Hurley">
        <div class="pastor-info">
          <h4>Jerry Hurley</h4>
          <p>SENIOR PRIEST & OUTREACH</p>
          <button class="btn btn-primary open-bio-btn" 
                  data-name="Jerry Hurley" 
                  data-role="Senior Priest & Outreach Director" 
                  data-bio="Father Jerry brings over 25 years of pastoral care and community chaplaincy experience. He oversees our pastoral care counseling, hospital visitation, and local homeless outreach ministries."
                  data-img="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=800"
                  style="margin-top: 15px; padding: 8px 16px; font-size: 11px;">READ FULL BIO ↗</button>
        </div>
      </div>

      <!-- Pastor 3 -->
      <div class="pastor-card" style="box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=800" alt="Samantha Wiley">
        <div class="pastor-info">
          <h4>Samantha Wiley</h4>
          <p>ASSOCIATE PASTOR & YOUTH</p>
          <button class="btn btn-primary open-bio-btn" 
                  data-name="Samantha Wiley" 
                  data-role="Associate Pastor & NextGen Director" 
                  data-bio="Pastor Samantha directs our youth and young adult discipleship programs. Her heart is to empower the rising generation with unshakeable faith and vibrant community."
                  data-img="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=800"
                  style="margin-top: 15px; padding: 8px 16px; font-size: 11px;">READ FULL BIO ↗</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Visit Invitation Banner -->
  <section style="background: var(--dark-accent); color: white; padding: 80px 5%; text-align: center;">
    <div class="container">
      <span class="section-tag" style="color: var(--primary);">JOIN US IN PERSON</span>
      <h2 style="font-size: 42px; margin-bottom: 20px;">READY TO VISIT FAITH CONNECT?</h2>
      <p style="max-width: 650px; margin: 0 auto 35px; opacity: 0.8;">We'd love to greet you, answer any questions, and save you a seat this coming Sunday.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="{{ route('contact') }}" class="btn btn-primary">PLAN YOUR VISIT</a>
        <a href="{{ route('ministries') }}" class="btn btn-outline">EXPLORE MINISTRIES</a>
      </div>
    </div>
  </section>
@endsection

@section('modals')
  <!-- Pastor Bio Modal -->
  <div id="pastor-bio-modal" class="modal-backdrop">
    <div class="modal-box">
      <button class="modal-close" aria-label="Close modal">&times;</button>
      <div style="display: flex; gap: 24px; align-items: center; margin-bottom: 20px; flex-wrap: wrap;">
        <img id="bio-modal-img" src="" alt="Pastor" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 3px solid var(--primary);">
        <div>
          <h3 id="bio-modal-name" style="font-size: 24px; margin-bottom: 4px;">Pastor Name</h3>
          <span id="bio-modal-role" class="section-tag" style="margin: 0; font-size: 12px;">Role</span>
        </div>
      </div>
      <p id="bio-modal-text" style="color: #555; line-height: 1.8; font-size: 15px; margin-bottom: 25px;">Bio details</p>
      <div style="border-top: 1px solid #eee; padding-top: 20px; display: flex; justify-content: flex-end;">
        <a href="{{ route('contact') }}" class="btn btn-primary" style="font-size: 12px; padding: 10px 20px;">CONTACT PASTORAL OFFICE</a>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  document.querySelectorAll('.open-bio-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('bio-modal-name').textContent = btn.dataset.name;
      document.getElementById('bio-modal-role').textContent = btn.dataset.role;
      document.getElementById('bio-modal-text').textContent = btn.dataset.bio;
      document.getElementById('bio-modal-img').src = btn.dataset.img;
      openModal('#pastor-bio-modal');
    });
  });
</script>
@endpush
