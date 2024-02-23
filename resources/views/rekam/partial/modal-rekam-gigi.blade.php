
<div class="modal fade" id="addRekamGigi">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rekam Gigi </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('pemeriksaan.update')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="rekamId" name="rekam_id" value="0">
                    <input type="hidden" id="pasienId" name="pasien_id" value="{{$pasien->id}}">
                    <div class="form-group">
                        <label class="text-black font-w500">Pemeriksaan*</label>
                        <textarea name="pemeriksaan"  required
                        id="editor" 
                        class="form-control" 
                        rows="10"></textarea>
                        @error('pemeriksaan')
                        <div class="invalid-feedback animated fadeInUp"
                        style="display: block;">{{$message}}</div>
                        @enderror
                       
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>