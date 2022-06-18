<section class="contact" id="contact">
    <h1 class="heading"> <span>Halaman</span>Checkout</h1>

    <div class="row">
        <iframe class="image" src="<?php echo base_url(); ?>assets/img/123.jpg" alt=""></iframe>"

        <form action="<?php echo base_url(); ?>index.php/order/submit">
            <h3>Checkout</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Nama" name="nama" value="<?php echo $this->session->userdata('user')['nama']; ?>" disabled>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email" name="email" value="<?php echo $this->session->userdata('user')['email']; ?>" disabled>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Nomer telepon" name="telp" value="<?php echo $this->session->userdata('user')['telp']; ?>" disabled>
            </div>
            <div class="custom-select" width="100%">
                <select>
                    <option selected disabled>Pilih Metode pembayaran:</option>
                    <?php foreach (get_metode() as $key => $metode): ?>
                        <option value="<?php echo $metode->id;?>"><?php echo $metode->metode.' a/n '.$metode->atas_nama;?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Check Out" class="btn">
        </form>
    </div>
</section>


<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>