<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            わんちゃん情報
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                
                      
                       <a href="{{route('dogs.dogs')}}" class="text-pink-500">新規登録</a>
                
                                        　　　　
                                        　　　　 <!--<div class="lg:w-2/3 w-full mx-auto overflow-auto">-->
                              <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                  <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">飼い主ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">お名前</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">犬種</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">体重</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ライフステージ</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">年齢</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ドックフード</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                                  </tr>
                                </thead>
                                <tbody>
                                　@foreach($dogs as $dog)</br>
                                  <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->id}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->user_id}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->name}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->breed}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->weight}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->gender}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->fix}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->age}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{$dog->food}}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3"><a class='text-blue-500' href="{{route('dogs.show',['id'=>$dog->id])}}">詳細</a></td>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
