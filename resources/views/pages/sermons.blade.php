@extends('layouts.app')

@section('title', 'Sermons & Media | Faith Connect Church')

@section('content')
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <span class="section-tag" style="color: #6DAE98;">THE LIVING WORD</span>
      <h1>SERMONS & MEDIA</h1>
      <p>Watch, listen, and download biblically-grounded messages from our Sunday services to encourage your daily walk with Christ.</p>
    </div>
  </section>

  <!-- Featured Sermon Hero Spotlight -->
  <section class="container" style="padding-top: 60px; padding-bottom: 40px;">
    <div style="background: #1A2E26; border-radius: 20px; overflow: hidden; color: white; display: flex; flex-wrap: wrap; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
      <div style="flex: 1.2; min-width: 320px; position: relative;">
        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=800" alt="Latest Sermon" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.35); display: flex; align-items: center; justify-content: center;">
          <button class="media-play-btn play-sermon-btn" 
                  data-title="Walking in Faith: Trusting God in Uncertain Times" 
                  data-speaker="Pastor Craig Groeschel" 
                  data-date="November 22, 2025" 
                  data-scripture="Proverbs 3:5-6"
                  style="width: 80px; height: 80px; font-size: 32px;" 
                  title="Play Message">▷</button>
        </div>
      </div>
      <div style="flex: 1; min-width: 300px; padding: 50px 40px; display: flex; flex-direction: column; justify-content: center;">
        <span class="section-tag" style="color: #6DAE98; margin-bottom: 10px;">LATEST MESSAGE • NOVEMBER 22, 2025</span>
        <h2 style="font-size: 36px; margin-bottom: 15px; line-height: 1.1;">Walking in Faith: Trusting God in Uncertain Times</h2>
        <p style="opacity: 0.8; font-size: 15px; line-height: 1.7; margin-bottom: 25px;">When life takes unexpected turns, how do we lean into God's sovereignty? Pastor Craig walks through Proverbs 3:5-6, revealing how trusting the Lord anchors our soul in turmoil.</p>
        
        <div style="display: flex; gap: 15px; align-items: center; margin-bottom: 30px;">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100" alt="Pastor Craig" style="width: 44px; height: 44px; border-radius: 50%;">
          <div>
            <div style="font-weight: 700;">Pastor Craig Groeschel</div>
            <div style="font-size: 12px; opacity: 0.7;">Series: Unshakeable Foundations (Part 4)</div>
          </div>
        </div>

        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
          <button class="btn btn-primary play-sermon-btn" 
                  data-title="Walking in Faith: Trusting God in Uncertain Times" 
                  data-speaker="Pastor Craig Groeschel" 
                  data-date="November 22, 2025" 
                  data-scripture="Proverbs 3:5-6">▷ WATCH NOW</button>
          <button class="btn btn-outline" onclick="alert('Downloading Sermon Outline PDF (Proverbs 3:5-6)...')" style="border-color: rgba(255,255,255,0.3); font-size: 13px;">DOWNLOAD NOTES (PDF)</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Search and Filter Section -->
  <section class="container" style="padding-bottom: 100px;">
    <!-- Live Search input -->
    <div style="max-width: 600px; margin: 40px auto 20px; position: relative;">
      <input type="text" id="sermon-search-input" class="form-control" placeholder="🔍 Search sermons by topic, title, speaker, or scripture..." style="border-radius: 50px; padding: 14px 25px; font-size: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
    </div>

    <!-- Filter Category Tabs -->
    <div class="filter-tabs" style="margin-top: 15px;">
      <button class="tab-btn active" data-filter="all" data-target-container="#sermons-archive-grid">All Messages</button>
      <button class="tab-btn" data-filter="faith" data-target-container="#sermons-archive-grid">Faith & Trust</button>
      <button class="tab-btn" data-filter="prayer" data-target-container="#sermons-archive-grid">Prayer & Discipleship</button>
      <button class="tab-btn" data-filter="romans" data-target-container="#sermons-archive-grid">Book of Romans</button>
      <button class="tab-btn" data-filter="family" data-target-container="#sermons-archive-grid">Marriage & Family</button>
    </div>

    <!-- Sermons Grid -->
    <div id="sermons-archive-grid" class="filterable-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 40px;">
      
      <!-- Sermon 1 -->
      <div class="filterable-card sermon-item-card" data-category="prayer faith" style="background: white; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
        <div style="position: relative; height: 200px;">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=600" alt="Prayer Sermon" style="width: 100%; height: 100%; object-fit: cover;">
          <button class="media-play-btn play-sermon-btn" 
                  data-title="The Power of Prayer: Connecting with God Daily" 
                  data-speaker="Samantha Wiley" 
                  data-date="November 15, 2025" 
                  data-scripture="Philippians 4:6-7"
                  style="position: absolute; bottom: 15px; right: 15px; width: 44px; height: 44px; font-size: 18px;">▷</button>
        </div>
        <div style="padding: 25px;">
          <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase;">PHILIPPIANS 4:6-7 • NOV 15, 2025</span>
          <h3 class="sermon-title" style="font-size: 20px; margin: 8px 0 12px;">The Power of Prayer: Connecting with God Daily</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">How bringing our anxious requests to God with thanksgiving unlocks a peace that transcends understanding.</p>
          <div style="border-top: 1px solid #f0f0f0; margin-top: 20px; padding-top: 15px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 13px; font-weight: 600; color: #444;">Samantha Wiley</span>
            <button class="btn btn-outline play-sermon-btn" 
                    data-title="The Power of Prayer: Connecting with God Daily" 
                    data-speaker="Samantha Wiley" 
                    data-date="November 15, 2025" 
                    data-scripture="Philippians 4:6-7"
                    style="border-color: #ddd; color: var(--primary); padding: 6px 14px; font-size: 11px;">PLAY ▷</button>
          </div>
        </div>
      </div>

      <!-- Sermon 2 -->
      <div class="filterable-card sermon-item-card" data-category="romans faith" style="background: white; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
        <div style="position: relative; height: 200px;">
          <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?auto=format&fit=crop&q=80&w=600" alt="Grace Sermon" style="width: 100%; height: 100%; object-fit: cover;">
          <button class="media-play-btn play-sermon-btn" 
                  data-title="Justified by Grace: No Condemnation" 
                  data-speaker="Father Jerry Hurley" 
                  data-date="November 8, 2025" 
                  data-scripture="Romans 8:1-4"
                  style="position: absolute; bottom: 15px; right: 15px; width: 44px; height: 44px; font-size: 18px;">▷</button>
        </div>
        <div style="padding: 25px;">
          <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase;">ROMANS 8:1-4 • NOV 8, 2025</span>
          <h3 class="sermon-title" style="font-size: 20px; margin: 8px 0 12px;">Justified by Grace: No Condemnation</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Understanding that our standing before God is grounded forever in what Christ accomplished, breaking the cycle of guilt.</p>
          <div style="border-top: 1px solid #f0f0f0; margin-top: 20px; padding-top: 15px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 13px; font-weight: 600; color: #444;">Jerry Hurley</span>
            <button class="btn btn-outline play-sermon-btn" 
                    data-title="Justified by Grace: No Condemnation" 
                    data-speaker="Father Jerry Hurley" 
                    data-date="November 8, 2025" 
                    data-scripture="Romans 8:1-4"
                    style="border-color: #ddd; color: var(--primary); padding: 6px 14px; font-size: 11px;">PLAY ▷</button>
          </div>
        </div>
      </div>

      <!-- Sermon 3 -->
      <div class="filterable-card sermon-item-card" data-category="family" style="background: white; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
        <div style="position: relative; height: 200px;">
          <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&q=80&w=600" alt="Family Sermon" style="width: 100%; height: 100%; object-fit: cover;">
          <button class="media-play-btn play-sermon-btn" 
                  data-title="Building a Christ-Centered Home" 
                  data-speaker="Pastor Craig Groeschel" 
                  data-date="November 1, 2025" 
                  data-scripture="Joshua 24:14-15"
                  style="position: absolute; bottom: 15px; right: 15px; width: 44px; height: 44px; font-size: 18px;">▷</button>
        </div>
        <div style="padding: 25px;">
          <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase;">JOSHUA 24:14-15 • NOV 1, 2025</span>
          <h3 class="sermon-title" style="font-size: 20px; margin: 8px 0 12px;">Building a Christ-Centered Home</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Practical principles for nurturing resilient faith in children, resolving marital conflict, and modeling genuine forgiveness.</p>
          <div style="border-top: 1px solid #f0f0f0; margin-top: 20px; padding-top: 15px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 13px; font-weight: 600; color: #444;">Craig Groeschel</span>
            <button class="btn btn-outline play-sermon-btn" 
                    data-title="Building a Christ-Centered Home" 
                    data-speaker="Pastor Craig Groeschel" 
                    data-date="November 1, 2025" 
                    data-scripture="Joshua 24:14-15"
                    style="border-color: #ddd; color: var(--primary); padding: 6px 14px; font-size: 11px;">PLAY ▷</button>
          </div>
        </div>
      </div>

      <!-- Sermon 4 -->
      <div class="filterable-card sermon-item-card" data-category="romans prayer" style="background: white; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
        <div style="position: relative; height: 200px;">
          <img src="https://images.unsplash.com/photo-1544427920-c49ccfb85579?auto=format&fit=crop&q=80&w=600" alt="Holy Spirit Sermon" style="width: 100%; height: 100%; object-fit: cover;">
          <button class="media-play-btn play-sermon-btn" 
                  data-title="When We Do Not Know How to Pray" 
                  data-speaker="Samantha Wiley" 
                  data-date="October 25, 2025" 
                  data-scripture="Romans 8:26-28"
                  style="position: absolute; bottom: 15px; right: 15px; width: 44px; height: 44px; font-size: 18px;">▷</button>
        </div>
        <div style="padding: 25px;">
          <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase;">ROMANS 8:26-28 • OCT 25, 2025</span>
          <h3 class="sermon-title" style="font-size: 20px; margin: 8px 0 12px;">When We Do Not Know How to Pray</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">How the Holy Spirit intercedes for us with groanings too deep for words during our seasons of deepest grief and exhaustion.</p>
          <div style="border-top: 1px solid #f0f0f0; margin-top: 20px; padding-top: 15px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 13px; font-weight: 600; color: #444;">Samantha Wiley</span>
            <button class="btn btn-outline play-sermon-btn" 
                    data-title="When We Do Not Know How to Pray" 
                    data-speaker="Samantha Wiley" 
                    data-date="October 25, 2025" 
                    data-scripture="Romans 8:26-28"
                    style="border-color: #ddd; color: var(--primary); padding: 6px 14px; font-size: 11px;">PLAY ▷</button>
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
            <div class="progress-bar-fill" style="width: 42%;"></div>
          </div>
          <div style="display: flex; justify-content: space-between; font-size: 11px; opacity: 0.7;">
            <span>18:12</span>
            <span>43:10</span>
          </div>
        </div>
      </div>

      <div style="border-top: 1px solid #eee; padding-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
        <span style="font-size: 13px; color: #666;">Need the study guide?</span>
        <button class="btn btn-primary" onclick="alert('Downloading sermon outline notes and discussion questions!')" style="font-size: 12px; padding: 10px 18px;">DOWNLOAD SERMON NOTES (PDF) ↓</button>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  // Real-time sermon search filter
  const searchInput = document.getElementById('sermon-search-input');
  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const q = e.target.value.toLowerCase().trim();
      document.querySelectorAll('.sermon-item-card').forEach(card => {
        const text = card.textContent.toLowerCase();
        if (text.includes(q)) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }
</script>
@endpush
