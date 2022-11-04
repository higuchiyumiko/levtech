       <x-app-layout>
              <x-slot name="header">
        　          Index
              </x-slot>
        <h1 class="title">
            {{$post->title}}
        </h1>
         <p class="edit">
            [<a href="/posts/{{$post->id}}/edit">edit</a>]
        </p>
        
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
            </div>
        </div>
        
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
       </x-app-layout>
