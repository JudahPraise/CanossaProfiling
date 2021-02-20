<div class="card rounded has-no-shadow has-no-border" style="background: transparent;">
    <div class="card-body d-flex flex-column">
      <div class="row d-flex flex-column">
        <h4 class="card-title"><i class="fas fa-scroll ml-4"></i>Latest Announcements</h4>
        @forelse($announcements as $announcement)
            <div class="card rounded" style="border-left: 3px solid blue">
              <div class="card-body">
                <h5>{{ $announcement->ann_title }}</h5>
                <p>{{ $announcement->ann_end }}</p>
              </div>
            </div>
        @empty
            <div class="card rounded" style="border-left: 3px solid blue">
              <div class="card-body">
                  No announcement
              </div>
            </div>
        @endforelse
    </div>
</div>