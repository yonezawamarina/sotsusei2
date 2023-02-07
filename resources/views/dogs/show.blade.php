<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font relative">
                       
                          <div class="container px-5  mx-auto">
                        
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                              <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">お名前</label>
                                    <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$dog->name}}</div>
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="breed" class="leading-7 text-sm text-gray-600">犬種</label>
                                    <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$dog->breed}}</div>
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="weight" class="leading-7 text-sm text-gray-600">体重</label>
                                    <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$dog->weight}}</div>
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label  class="leading-7 text-sm text-gray-600">性別</label></br>
                                     <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$gender}}</div>
                                  
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="fix" class="leading-7 text-sm text-gray-600">去勢避妊</label></br>
                                    <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$fix}}</div>
                                  
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                    <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$dog->age}}</div>
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="food" class="leading-7 text-sm text-gray-600">食べているドックフード</label>
                                    <div  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$dog->food}}</div>
                                  </div>
                                </div>
                           
                            　　<form method='get' action={{route('dogs.edit',['id' => $dog->id])}}>
                                <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</button>
                                 </form>
                                  
                                <form id='delete_{{$dog->id}}'class="mt-40" method='get' action={{route('dogs.destroy',['id' => $dog->id])}}>
                                   @csrf
                                <div class="p-2 w-full">
                           
                                   <a href="#" data-id="{{ $dog->id }}" onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">削除する</a>
                                
                                </div>
                                </form>
                
                              </div>
                            </div>
                          </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

          
          <!-- 確認メッセージ -->
          <script>
          function deletePost(e){
           'use strict'
           if(confirm('本当に削除していいですか？')){
           document.getElementById('delete_' + e.dataset.id).submit()
           }
          }
          </script>
