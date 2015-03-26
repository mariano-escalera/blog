<!-- Comment -->
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </a>
    <div class="media-body clearfix">
        <h4 class="media-heading">Start Bootstrap
            <div class="btn-group pull-right" role="group">
                @if($comment['status'] === 0)
                    <a href="#" class="btn btn-success btn-xs" role="button">
                        <span class="glyphicon glyphicon-ok"></span>
                    </a>
                @endif
                <a href="#" class="btn btn-danger btn-xs" role="button" onclick="return confirm('Do you really want to delete this comment?')">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </div>
            <small>August 25, 2014 at 9:30 PM</small>
        </h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
</div>