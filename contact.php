<?php include 'component/header.php'?> 

    <div class="container mt-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email address</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kirim pesan</label>
                <textarea style="display:block;" placeholder="Ketik pesan disini"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">kirim pesan</button>
        </form>
    </div>
    
<?php include 'component/footer.php'?> 