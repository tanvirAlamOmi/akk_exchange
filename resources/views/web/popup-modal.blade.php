@if(isset($popup))
<!-- Bootstrap Modal -->
<div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            @if($popup['image'])
                <img src="{{ asset('img-contents/popup-images/'.$popup['image']) }}" alt="Popup Image" class="img-fluid td-img"
                width="600" height="600">
            @else
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModalLabel">{{ $popup['title'] }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if($popup['description'])
                    <div class="modal-body">
                        <p>{{ $popup['description'] }}</p>
                    </div>
                @endif

                @if($popup['external_link'])
                    <div class="modal-footer">
                        <a href="{{ $popup['external_link'] }}" class="btn btn-primary">View Details</a>
                    </div>
                @endif
            @endif


        </div>
    </div>
</div>
@endif
