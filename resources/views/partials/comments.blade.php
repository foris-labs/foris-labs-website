<div class="flex mb-4">
    <img src="{{asset('img/blog_images/user.png')}}" class="w-12 h-12 rounded" alt="User Image">
    <div class="pl-4">
        <h6 class="text-lg font-semibold"><a href="#" class="text-blue-500">{{$comment->name}}</a> <span class="text-xs text-gray-500"><i>{{$comment->created_at->diffForHumans()}}</i></span></h6>
        <p class="text-gray-700">{{$comment->content}}</p>
        <button class="btn btn-sm btn-light">Reply</button>
    </div>
</div>