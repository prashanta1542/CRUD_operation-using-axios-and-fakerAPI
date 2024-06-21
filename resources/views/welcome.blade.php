<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/js/app.js'])
</head>

<body>

    <p id="id"></p>
    <h3 id="title"></h3>
    <script type="module">
        var id = document.querySelector('#id');
        var title = document.querySelector('#title');
        var req={
            'userId':1,
            'id':1,
            'title':'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
            'body':"sunt aut facere repellat provident occaecati excepturi optio reprehenderit.sunt aut facere repellat provident occaecati excepturi optio reprehenderit"
        };
        const getData=()=>{
            axios.get('https://jsonplaceholder.typicode.com/posts').then(
                (e)=>{
                    readData(e);
                }
            )
        }
       
        const postData=(data)=>{
            axios.patch('https://jsonplaceholder.typicode.com/posts/1',data)
            .then((res)=>{
                console.log(res);
                if(res.status == 201){
                    title.innerHTML="successfully insert data";
                }
            }).catch(err=>{console.log(err)})
        }
        postData(req);     
       
        const deleteaData=(id)=>{
            axios.delete(`https://jsonplaceholder.typicode.com/posts/${id}`)
            .then((res)=>{
                console.log(res);
            }).catch(err=>console.log(err))
        }  
        deleteaData(1);


            
    </script>
</body>

</html>