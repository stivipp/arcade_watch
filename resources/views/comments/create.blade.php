
<section class="flex mx-auto items-center justify-center mt-2 mx-8 mb-4 max-w-lg">
    <form class="w-full max-w-md px-4 pt-1" method="POST" action="/comments">
      @csrf

       <div class="flex flex-wrap -mx-3 mb-6">
          <h2 class="px-4 pt-1 pb-2 text-white text-lg font-semibold">Pridaj Novy <span class="text-yellow-400">Comment</span></h2>
          <div class="w-full md:w-full px-3 mb-2 mt-2">
             <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize w-full h-20 py-2 px-3 
                                font-sm placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-500 focus:bg-white"
                                name="text" placeholder='Very nice text here :)' required>
            </textarea>
          </div>

          <div class="w-full md:w-full flex items-start md:w-full px-3">
             <div class="mr-1">
                <button class="flex py-1 px-2 bg-yellow-300 text-black font-semibold font-sm border-none rounded-md shadow-md 
                            hover:bg-gray-500 hover:text-yellow-400 hover:shadow-none
                              focus:outline-none focus:ring-1 focus:ring-white">
                              <svg class="w-7 h-7 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M17.211 3.39H2.788c-.22 0-.4.18-.4.4v9.614c0 .221.181.402.4.402h3.206v2.402a.4.4 0 00.683.285l2.72-2.688h7.814a.403.403 0 00.401-.402V3.79a.4.4 0 00-.401-.4m-.4 9.614H9.232a.404.404 0 00-.282.117L6.795 15.25v-1.846c0-.219-.18-.4-.401-.4H3.189V4.19h13.622v8.814z"/>
                              </svg>
                              add comment
                </button>
             </div>

            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

          </div>
        </div>

    </form>
</section>