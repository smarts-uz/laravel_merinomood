<div id="posts">
  <section class="pt-8 mb-16 sm:mb-6">
      <div class="container">
          <div class="border-b-2 border-gray-450 py-10 sm:pt-0 sm:border-none">
              <div class="flex items-center justify-between sm:block">
                  <div class="breadcrumb text-gray-520 text-sm font-medium sm:border-b-2 border-gray-450 sm:pb-3 sm:mb-8">
                      <a href="/">Home</a>
                      <span class="text-gray-750">Blog</span>
                  </div>
                  <div class="flex-1">
                      <h1 class="text-4xl text-gray-850 uppercase text-center font-medium sm:text-left">Blog</h1>
                  </div>
                  <div class="text-right sm:hidden">
                      <span class="fon-medium text-gray-520">{{ count($popularPosts) + $posts->total() }} articles</span>
                  </div>
              </div>
              <div class="w-full text-center sm:text-left mt-3">
                  <p class="font-medium text-sm text-gray-520">We have prepared a selection for You to make it easier to navigate and know what to buy</p>
              </div>
          </div>
      </div>
  </section>
  <section>
      <div class="container">
          <div class="border-b-2 border-gray-450 pb-18 sm:pb-12 sm:overflow-x-scroll scrollbar">
              <div class="flex justify-center items-center sm:justify-start">
                  @foreach($popularPosts as $key => $popularPost)
                      <div class="popular-posts flex-shrink-0 {{ 'w-1/' . (floor(($key + 1)/2) + 4) . ' order-' . (floor(($key + 1) * pow(-1, ($key + 1))/2) + 3)}}">
                          <a href="/posts/{{$popularPost->slug}}" class="block mx-2 relative font-medium">
                              <img class="w-full border gray-650"
                                   src="{{ '/storage/' . $popularPost->miniature }}"
                                   alt="{{ $popularPost->title }}">

                              <div class="absolute top-0 w-full text-center flex flex-col justify-center pt-4">
                                  <span class="text-sm text-white mb-2">{{ $popularPost->views }} people</span>
                                  <img src="{{ asset('/images/blog-eye.svg') }}" alt="">
                              </div>

                              <div class="absolute bottom-0 w-full text-center flex flex-col justify-center mb-5">
                                  <span class="text-sm text-gray-420">article</span>
                                  <p class="text-white leading-tight mb-2 px-1">{{ $popularPost->title }}</p>
                              </div>
                          </a>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </section>
  <section id="posts" class="pt-18 sm:pt-14 mb-20">
      <div class="container">
          <div class="flex flex-wrap">
              @foreach($posts as $post)
                  <a href="/posts/{{$post->slug}}" class="block w-1/5 sm:w-1/3 xs:w-1/2 px-2 mb-6 font-medium">
                      <img class="w-full border rounded-lg gray-650 mb-4 sm:mb-3"
                           src="{{ '/storage/' . $post->miniature }}"
                           alt="{{ $post->title }}">
                      <p class="my-4 sm:mb-4 sm:my-0">{{ $post->title }}</p>
                      <span class="text-sm text-gray-520">{{ $post->created_at->format('d.m.Y')}}</span>
                  </a>
              @endforeach
          </div>
          <div class="text-center my-10">
              {{ $posts->links() }}
          </div>
      </div>
  </section>
</div>
