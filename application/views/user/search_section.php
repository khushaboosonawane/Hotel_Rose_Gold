<style>
    .search-box{
    width: fit-content;
    height: fit-content;
    position: relative;
  }
  .input-search{
    height: 50px;
    width: 50px;
    border-style: none;
    padding: 10px;
    font-size: 18px;
    letter-spacing: 2px;
    outline: none;
    border-radius: 25px;
    transition: all .5s ease-in-out;
    background-color: #22a6b3;
    padding-right: 40px;
    color:#fff;
  }
  .input-search::placeholder{
    color:white;
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
  }
  .btn-search{
    width: 50px;
    height: 50px;
    border-style: none;
    font-size: 20px;
    font-weight: bold;
    outline: none;
    cursor: pointer;
    border-radius: 50%;
    position: absolute;
    right: 0px;
    color:#ffffff ;
    background-color:transparent;
    pointer-events: painted;  
  }
  .btn-search:focus ~ .input-search{
    width: 300px;
    border-radius: 0px;
    background-color: transparent;
    border-bottom:1px solid #ff512f;
    transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  }
  .input-search:focus{
    width: 300px;
    border-radius: 0px;
    background-color: transparent;
    border-bottom:1px solid #ff512f;
    transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  }
  
</style>
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Professionals</h5>
                    <h1>Meet The Team</h1>
                </div>
            </div>
        </div>
    </div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
        <div class="search-box">
        <button class="btn-search"><i class="ri-search-2-line lead" style="color:#ff512f"></i></button>
        <input type="text" class="input-search" placeholder="Type to Search...">
      </div>
        </div>
    </div>
</div>