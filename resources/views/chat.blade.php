<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container bg-[pink] m-auto">

        {{-- 蓋文樓 --}}
        {{-- <div class="w-[90%] bg-[lightblue] mx-auto mb-1">
            <div class="text-[30px] font-bold">
                1F
            </div>
            <div class=" flex justify-center">
                <textarea class="resize-none w-[90%]" name="" rows="10" disabled></textarea>
                <div class="flex flex-col ms-3">
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1 mb-1">編輯</button>
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1">刪除</button>
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1 mb-1 hidden">完成</button>
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1 hidden">取消</button>
                </div>
            </div>
            
        </div> --}}

        {{-- 推文樓 --}}
        {{-- <div class="w-[70%] bg-[orange] mx-auto">
            <div class="text-[30px] font-bold">
                1F-1
            </div>
            <div class=" flex justify-center">
                <textarea class="resize-none w-[90%]" name="" rows="5" disabled></textarea>
                <div class="flex flex-col ms-3">
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1 mb-1">編輯</button>
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1">刪除</button>
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1 mb-1 hidden">完成</button>
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1 hidden">取消</button>
                </div>
            </div>
        </div> --}}

        {{-- 回文樓 --}}
        {{-- <div class="w-[70%] bg-[orange] mx-auto mb-5">
            <div class="text-[30px] font-bold">
                回覆一下吧
            </div>
            <div class=" flex justify-center">
                <textarea class="resize-none w-[90%]" name="" rows="5"></textarea>
                <div class="flex flex-col ms-3">
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1">發送</button>
                </div>
            </div>
        </div> --}}


        {{-- 發文樓 --}}
        <div class="w-[90%] bg-[lightgreen] mx-auto">
            <div class="text-[30px] font-bold">
                發文時間
            </div>
            <div class="flex justify-center">
                <textarea class="resize-none w-[90%]" name="" rows="10"></textarea>
                <div class="flex flex-col ms-3">
                    <button type="button" class="bg-[white] border-2 border-[gray] px-3 py-1">發送</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
