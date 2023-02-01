<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOK ROOMS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>

<body>
    <div class="" id="loader">
        
    </div>


    <div class="main">
        <div class="container">
            <div class="booking-content">
                
                <div class="booking-form">
                    <form action="http://pestana.com/room/bookRoom2" id="booking-form" method="POST">
                        
                        <div class="form-group form-input">
                            <label style="color: black;" for="deut_date">date debut</label>
                            <input type="date" name="dated" value="" class="form-control datepicker booking-date-from date1" placeholder="Date" name="date">
                        </div>
                        <div class="form-group form-input">
                            <label for="phone" style="color: black;">date fin</label>
                            <input type="date" name="datef" value=""class="form-control datepicker booking-date-to date1" placeholder="Date" name="date">
                        </div> 
                        
                        <input type="hidden" name='idR' placeholder="id room" value="<?= $room['idR']  ?>">
                       


                            <?php if($room['typeR'] == 'suite'){ ?>
                                <div class="form-radio">
                                    <label class="label-radio" style="color: white;"> Select number people</label>
                                    <div class="radio-item-list">
                                        <span class="radio-item">
                                            <input type="radio" name="nbrPerson" class="personNbr" value="3" id="number_people_3" />
                                            <label for="number_people_3">3</label>
                                        </span>
                                        <span class="radio-item">
                                            <input type="radio" name="nbrPerson" class="personNbr" value="4" id="number_people_4" />
                                            <label for="number_people_4">4</label>
                                        </span>
                                        <span class="radio-item">
                                            <input type="radio" name="nbrPerson" class="personNbr" value="5" id="number_people_5" />
                                            <label for="number_people_5">5</label>
                                        </span>
                                        <span class="radio-item">
                                            <input type="radio" name="nbrPerson" class="personNbr" value="6" id="number_people_6" />
                                            <label for="number_people_6">6</label>
                                        </span>

                                    </div>
                                </div>
                            <?php } ?>

                            <div class="guests">

                            </div>


                        

                        <div class="form-submit">
                            <button type="submit" class="submit" id="submit" name="bookSuit2">Book now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        
        const personNbr = document.querySelectorAll('.personNbr');
        const people_input = document.querySelector('.guests');

        for(let nbr_people of personNbr){
            nbr_people.addEventListener('change',(e)=>{
                people_input.innerHTML = ``;
                let people = e.target.value;
                let i = 0;
                while(i < people){
                    people_input.innerHTML += `
                        <div class="guests_content">
                            <div class="form-group form-input">
                                <label style="color: black;"></label>
                                <input type="text" placeholder="Enter guest name" name="name${i+1}" value="" />
                            </div>
                            <div class="form-group form-input">
                                <label style="color: black;"></label>
                                <input type="date" name="birthday${i+1}" value="" />
                            </div>
                        </div>
                    `
                    i++;
                }
            
            })
        }


    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    
    <script src="/assets/js/scripts.js"></script>
</body>

</html>