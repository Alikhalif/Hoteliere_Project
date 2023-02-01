var myselect = document.getElementById('myselect');
var newSelect = document.querySelector('.suites');


myselect.addEventListener('change', () => {
    if(myselect.value == 'suite'){
        var selectContent = 
            `<div class="Allsuites">
                <select value="<?= $room['type_suitsR'] ?>" class="form-select" name="list2" id="newselect" aria-label="Default select example">
                    <option value="" selected>select suite type</option>
                    <option value="Standard">Standard suite rooms</option>
                    <option value="Junior">Junior</option>
                    <option value="Presidential">Presidential suite</option>
                    <option value="Penthouse">Penthouse suites</option>
                    <option value="Honeymoon">Honeymoon suites</option>
                    <option value="Bridal">Bridal suites</option>
                </select>    
            </div><br>
            `;
        newSelect.innerHTML = selectContent;
        // newSelect.append(selectContent)    
    }else{
        var newselect = document.getElementById('newselect');
        var Allsuites = document.querySelector('.Allsuites');
        if(newselect){
            Allsuites.remove();
        }
    }
});


