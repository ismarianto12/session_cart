<?php if($this->session->flashdata('pesan')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
<h2>Selamat Datang <?php echo strtoupper($this->session->userdata("username"));?> !</h2>
<div class="mt-3">
  <table class="table" id="data">
              
              </tbody>
            </table>
</div>
        </div>
    </div>