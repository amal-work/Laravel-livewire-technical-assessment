<div class="row comment-row">                                       
    @foreach($comments as $comment)
        <div class="col-md-4 comment-column">
            <div class="comment_box">
                <div class="marks_bar">
                    <img src="{{url('/images/star.png')}}" class="img-fluid" alt="star">
                </div>
                
                <p class="description">"{{$comment->description}}"</p>
                <div class="comment_user">
                    <div class="pic"><img src="{{url('/images/Brittan_Wheeler.png')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{{$comment->user->name}}</h4>
                        <span>CTO</span>
                    </div>
                </div>
            </div>              
        </div>        
    @endforeach
</div>