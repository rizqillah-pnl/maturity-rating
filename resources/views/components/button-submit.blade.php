<div class="card p-3">
    <div class="btn-group">
        <a href="{{ $back ? url('/' . $back) : '' }}" class="btn-link {{ $back ? '' : 'disabled' }}"
            style="display: inline-block; width: 100px; text-align: center;">Back</a>
        <button type="submit" class="btn btn-primary" title="Submit untuk simpan data!">Submit</button>
        <button type="reset" class="btn btn-dark" title="Hapus data yang telah diisi!">Reset</button>
        <a href="{{ $next ? url('/' . $next) : '' }}" class="btn-link {{ $next ? '' : 'disabled' }}"
            style="display: inline-block; width: 100px; text-align: center;">Next</a>
    </div>
</div>
