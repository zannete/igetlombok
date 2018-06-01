<div class="col-md-12">
  <div class="recent-complaint">
    <div class="row">
      <div class="col-md-6 clear-padding">
        <h3>My Complaints</h3>
      </div>
      <div class="col-md-6 clear-padding text-right">
        <a href="/complaint/new" class="btn btn-primary">New Complaint</a>
      </div>
    </div>
    <div class="complaint-tabs">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#active-complaint" class="text-center"><i class="fa fa-bolt"></i> Active ({{ count($complaints->activeComplaints) }})</a></li>
        <li><a data-toggle="tab" href="#resolved-complaint" class="text-center"><i class="fa fa-history"></i> Resolved ({{ count($complaints->resolvedComplaints) }})</a></li>	
      </ul>
    </div>
    <div class="tab-content">
      <div id="active-complaint" class="tab-pane fade in active">
        @foreach($complaints->activeComplaints as $complaint)
          <p><a href="/complaint/detail?complaint_id={{ $complaint->id }}"><span>Ticket #{{ $complaint->id }}:</span> {{ $complaint->subject }}</a></p>
        @endforeach
      </div>
      <div id="resolved-complaint" class="tab-pane fade in">
        @foreach($complaints->resolvedComplaints as $complaint)
          <p><a href="/complaint/detail?complaint_id={{ $complaint->id }}"><span>Ticket #{{ $complaint->id }}:</span> {{ $complaint->subject }}</a></p>
        @endforeach
      </div>
    </div>
  </div>
</div>