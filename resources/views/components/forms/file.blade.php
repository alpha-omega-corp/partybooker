@props([
    'name',
    'label',
    'id',
    'file' => null,
])

<div class="mb-3 w-100">
    <!-- Upload -->
    <div id="imageUpload-{{$id}}" class="file-upload"
         x-data="{input: document.getElementById('imageSelect-{{$id}}')}" @click="input.click()">
        @svg('heroicon-o-cloud-arrow-down')
        <span>{{$label}}</span>
    </div>

    <!-- Preview -->
    <div id="imageLabel-{{$id}}" class="file-preview" style="display:none;">
        <div class="file-label">
            <div class="preview-icon">
                @svg('heroicon-o-photo')
            </div>
            <div class="preview-label">{{$label}}</div>
        </div>

        <a class="preview-edit" x-data="{input: document.getElementById('imageSelect-{{$id}}')}"
           @click="input.click()">
            @svg('heroicon-o-pencil')
        </a>

        <img id="imagePreview-{{$id}}" src="#" alt="your image"/>
    </div>


    <!-- File Input -->
    <input type="file" id="imageSelect-{{$id}}" class="d-none" name="{{$name}}" @error('image') is-invalid @enderror>

</div>

<script type="module">
    document.getElementById('imageSelect-{{$id}}').onchange = () => {
        const [file] = document.getElementById('imageSelect-{{$id}}').files
        if (file) {
            document.getElementById('imageLabel-{{$id}}').style.display = 'block';
            document.getElementById('imagePreview-{{$id}}').src = URL.createObjectURL(file)
            document.getElementById('imageUpload-{{$id}}').style.display = 'none';
        }
    }

    if ('{{$file}}') {
        document.getElementById('imageUpload-{{$id}}').style.display = 'none';
        document.getElementById('imagePreview-{{$id}}').src = '{{asset($file)}}';
        document.getElementById('imageLabel-{{$id}}').style.display = 'block';
    }
</script>
