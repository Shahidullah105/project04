<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

    <style type="text/tailwindcss">
    @layer utilities {
      .container{
        @apply px-10 mx-auto;
      }
    }
  </style>
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="flex justify-between">
<h2 class="text-red-500"> Create</h2>      
<a href="/" class="bg-green-600 text-white rounded py-2 px-4">back to home</a>
</div>

<div>
    <form  method="POST" action="{{route('store')}}"> 
        @csrf
        <div class="flex flex-col gap-5">
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="file" name="image">
        </div>
        <div>
            <input type="submit" class="bg-green-500 text-white py-2 px-4 rounded inline-blocl">
        </div>
    </form>
</div>
</div>
    
</body>
</html> 