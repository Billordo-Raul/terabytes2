<div class="row mt-4">
    <div class="row mb-4">
        <div class="col-2 text-right">
            <label for="code" class="col-form-label text-right colorLabel code">Descripcion:</label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name='description' maxlength="100" size="100" required>
        </div>
        <div class="col-2 text-right">
            <label class="col-form-label text-right colorLabel">Precio:</label>
        </div>
         <div class="col-4"> 
             <input type="text" class="form-control maskDNI" name='cost_price' data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask  required>  
            <!-- data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask -->
            <!-- <input type="text" class="form-control maskDNI" name='cost_price' data-inputmask='"mask": "99.999.999,99"' data-mask  required> -->
            <!-- <input type="text" class="form-control maskDNI" name="dni" id="dni" placeholder="DNI" data-inputmask='"mask": "99.999.999"' data-mask  value="{{ !empty($user->userdata) ? $user->userdata->dni : '' }}"> -->
         </div> 
        

        <!-- <div class="col-3">
            <div class="form-group">
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="product_image">
                    <label class="custom-file-label" class="avatar">Image</label>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>
