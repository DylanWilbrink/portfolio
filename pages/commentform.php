<!-- jongens dit moeten jullie onder de huisjes pagina plekken -->

<div class="my-3 p-3 bg-white rounded box-shadow container">
    <form class="p-3" action="../php/addcomment.php" method="POST">
        <h6 class="border-bottom border-gray pb-2 mb-0">Laat uw mening over deze huis:</h6>
        <div class="row my-2">
            <div class="col-2">
                <label>Cijfer:</label>
                <select class="form-control form-control-md" name="rating" style="text-align: center">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option selected="selected">10</option>
                </select>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                <label>Toelichting:</label><br/>
                <input type="text" class="form-control form-control-md" name="comment" id="comment"></input>

            </div>
        </div>
        <div class="row my-2 ">
            <div class="col-2">
                <input type="submit" class="btn btn-primary" value="Recentie versturen" name="submit">
            </div>
        </div>
        <!--        <label for="number"> rating:</label>-->
        <!--        <input type="number" name="rating" max="10" min="0">-->
        <!--        <textarea name="comment" maxlength="1500" id="comment" cols="30" rows="10"></textarea>-->
        <!--        <input type="submit" name="submit" value="place comment">-->
    </form>
</div>