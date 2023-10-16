<!-- <option value="">--select--</option>
                            <?php
                            $sql1 = "SELECT * FROM states";
                            $result1 = (mysqli_query($conn, $sql1));
                            while ($states = mysqli_fetch_array($result1, MYSQLI_ASSOC)) :; ?>
                                <option value="<?php echo $states["id"]; ?>">
                                    <?php echo $states["name"]; ?>
                                </option>
                            <?php
                            endwhile;
                            ?> -->

<div class="container  col-md-4 ">
    <div class="form-group py-2">

        <label for="country"> Country</label>
        <select class="form-select" id="country">
            <option value=""> Select Country</option>
            <?php

            $query = "select * from country";
            // $query = mysqli_query($con, $qr);
            $result = $con->query($query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

            ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php       }
            }

            ?>

        </select>
    </div>
    <div class="form-group py-2">
        <label for="country"> State</label>
        <select class="form-select" id="state">
            <option value="">select State</option>

        </select>
    </div>
    <div class="form-group py-2 ">
        <label for="country"> City</label>
        <select class="form-select" id="city">
            <option value="">select City</option>
        </select>
    </div>
</div>