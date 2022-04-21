<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Activity 1 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>

    </style>
</head>
<body>
    <header class="p-3 bg-primary text-white rounded text-center display-4"> Jquery Activity 1 </header>
        <div class="container">
            <p class="h3 mt-3" id="header-1"> Fibonacci Sequence </p>
                <div class="mt-4 p-5 bg-info text-white rounded" id="part1-container">
                    <label class="form-label">Input number of terms here: </label>
                    <div class="input-group mb-3">
                        <input type="number" id="input-1" min="1" max="100">
             </div>
             <ul class="list-group" id="ul1">
                 
             </ul>
            
                    <button type="button" id="btn-1" class="btn btn-secondary">Submit Term#</button>        
               </div>
            
            <p class="h3 mt-3" id="header-2"> Quarantine Age Checker </p>
                <div class="mt-4 p-5 bg-info text-white rounded" id="part2-container">
                    <label class="form-label">Input age here: </label>
                        <div class="input-group mb-3">
                            <input type="number" id="input-2" min="1" max="100">
                 </div>
                             <button type="button" id="btn-2" class="btn btn-secondary">Submit Age</button>           
                        </div>
        </div>



    <script>
         $(document).ready(function(){

            $('#btn-1').on('click', function(e) {
			e.preventDefault();  
        
            function fibonacciSequence(){
                let n1 = 0, n2 = 1, nextTerm;   
                for (let i = 1; i <= input1; i++){
                    console.log(n1);
                    $('#ul1').append(`<li> ${n1} </li>`);
               
     

                    nextTerm = n1 + n2;
                    n1 = n2;
                    n2 = nextTerm;
		            }            
	            }
                var input1 = $('#input-1').val();
                fibonacciSequence(input1);


});
            //Part 2
            $('#btn-2').on('click', function(e){
                e.preventDefault();

            function quarantineChecker(age){
                return ( age < 21 || age > 65) && !(age >= 21 && age <= 65) ? 
                $('#part2-container').html('Stay inside your house!').addClass("text-center display-6") 
                :
                $('#part2-container').html('You can go outside!').addClass("text-center display-6"); 
            }
            const input2 = $('#input-2').val();
            quarantineChecker(input2);
    });
            
});
    </script>
</body>
</html>