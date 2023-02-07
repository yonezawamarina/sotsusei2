<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            編集画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font relative">
                        <form method="post" action="{{route('dogs.update',['id'=> $dog->id])}}">
                            @csrf
                          <div class="container px-5  mx-auto">
                        
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                              <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">お名前</label>
                                    <input type="text" id="name" name="name" value="{{$dog->name}}"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="breed" class="leading-7 text-sm text-gray-600">犬種</label>
                                    <input type="text" id="breed" name="breed" value="{{$dog->breed}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="weight" class="leading-7 text-sm text-gray-600">体重</label>
                                    <input type="text" id="weight" name="weight" value="{{$dog->weight}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label  class="leading-7 text-sm text-gray-600">性別</label></br>
                                    <input type="radio"  name="gender" value="0" @if($dog->gender == 0) checked @endif>男の子
                                    <input type="radio"  name="gender" value="1" @if($dog->gender == 1) checked @endif>女の子
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="fix" class="leading-7 text-sm text-gray-600">去勢避妊</label></br>
                                     <input type="radio"  name="fix" value="0" @if($dog->fix == 0) checked @endif>している
                                     <input type="radio"  name="fix" value="1" @if($dog->fix == 1) checked @endif>していない
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                    <input type="text" id="age" name="age"  value="{{$dog->age}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                                
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="food" class="leading-7 text-sm text-gray-600">食べているドックフード</label>
                                    <input type="text" id="food" name="food" value="{{$dog->food}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                           
                            
                                <div class="p-2 w-full">
                                  <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
                                </div>
                
                              </div>
                            </div>
                          </div>
                          </form>
                        </section>
                        
                                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
