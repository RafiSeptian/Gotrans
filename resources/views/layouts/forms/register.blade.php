<form action="" method="post">
          <div class="group-form">
               <label for="name">Nama lengkap</label>
               <div class="form-wrapper">
                    <input type="text" name="name" id="name">
               </div>
          </div>
          <div class="group-form">
               <label for="text">Username</label>
               <div class="form-wrapper">
                    <input type="text" name="text" id="text">
               </div>
          </div>
          <div class="group-form">
               <label for="email">E-mail</label>
               <div class="form-wrapper">
                    <input type="email" name="email" id="email">
               </div>
          </div>
          <div class="group-form">
               <label for="password">Password</label>
               <div class="form-wrapper">
                    <input type="password" name="password" id="password">
               </div>
          </div>
     
          <div class="sign-in">
               <a href="{{ route('login.show') }}" id="already">Sudah punya akun ?</a>
          </div>
     
          <button type="submit" class="btn-modal bgr-primary">
               Daftar
          </button>
     </form>