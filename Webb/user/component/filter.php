<div class="col-md-2">
    
    <div class="list-group">
     <div class="checkbox" style="margin-top:10%;">
                <label>
                    <input type="checkbox" value="" id='checkbox0' >
                    Tất cả
                </label>
        </div>
        <?php
        $result=getAllcategory();
        foreach ($result as $row) {
        ?>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="<?php echo $row['Id']?>" id='checkbox<?php echo $row['Id']?>'>
                    <?php echo $row['Name']?>
                </label>
            </div>
            

        <?php } ?>
    </div>

    <form name="timkiemnangcao">
        <fieldset>
            <legend style="font-size:1.33em">Tìm kiếm nâng cao</legend>

           

            <legend style="font-size:1.2em;padding-left:10px;margin-top:20px">Nhập giá</legend>
            Từ <input type="text" name="giatu" style="padding:5px  10px;margin-left:18px;width:125px;"><br>
            Đến <input type="text" name="giaden" style="padding:5px  10px;margin-left:10px;margin-top:10px;width:125px;">

            <legend style="font-size:1.2em;padding-left:10px;margin-top:20px">Sắp xếp</legend>
            <select name="sapxep" style="padding:5px  10px">
                <option>--Chọn--</option>
                <option>Giá từ thấp tới cao</option>
                <option>Giá từ cao đến thấp</option>
                <option>Theo tên từ A đến Z</option>
                <option>Theo tên từ Z đến A</option>
            </select>
        </fieldset>
    </form>

</div>

