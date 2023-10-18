<form action="tests.php?filterSubmit=Yes" method="post">
        <div class="card-filters">
          <div class="form-outer">
            <div class="form-box">
              <label for="fname">
                <div class="label-with-add">
                  <div>Subject</div>
                </div>
              </label>
              <select name="subject" id="subject">
                <option value="">Select</option>
                <?php
                $selList = mysqli_query($dbconn, "select * from subject where isactive='1' order by name asc");
                while ($selList1 = mysqli_fetch_object($selList)) {
                  $selected = '';
                  if ($selList1->name == $_SESSION['flsubject']) {
                    $selected = 'selected';
                  }
                  echo '<option value="' . $selList1->name . '" ' . $selected . '>' . $selList1->name . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-box">
              <label for="fname">
                <div class="label-with-add">
                  <div>Sub Subject</div>
                </div>
              </label>
              <select name="subsubject" id="subsubject">
                <option value="">Select</option>
                <?php
                if ($_SESSION['flsubject'] != '') {
                  $flsubcnd = "and subject='" . $_SESSION['flsubject'] . "'";
                }
                $selList = mysqli_query($dbconn, "select * from subsubject where isactive='1' " . $flsubcnd . " order by name asc");
                while ($selList1 = mysqli_fetch_object($selList)) {
                  $selected = '';
                  if ($selList1->name == $_SESSION['flsubsubject']) {
                    $selected = 'selected';
                  }
                  echo '<option value="' . $selList1->name . '" ' . $selected . '>' . $selList1->name . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-box">
              <label for="fname">
                <div class="label-with-add">
                  <div>Topic</div>
                </div>
              </label>
              <?php
              if ($_SESSION['flsubsubject'] != '') {
                $flsubsubcnd = "and subsubject='" . $_SESSION['flsubsubject'] . "'";
              }
              $selList = mysqli_query($dbconn, "select * from topic where isactive='1' " . $flsubsubcnd . " order by name asc");
              ?>
              <select name="topic" id="topic">
                <option value="">Select</option>
                <?php
                while ($selList1 = mysqli_fetch_object($selList)) {
                  $selected = '';
                  if ($selList1->name == $_SESSION['fltopic']) {
                    $selected = 'selected';
                  }
                  echo '<option value="' . $selList1->name . '" ' . $selected . '>' . $selList1->name . '</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="filter-submit">
            <button type="submit" id="qstep1-btn" class="btn btn-green mx-0 my-3">Filter</button>
          </div>
        </div>
      </form>