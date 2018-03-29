<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    const GOOGLE_MAP_KEY = '{!! config('services.google.map_key') !!}';
    const MAX_IMAGE_UPLOAD_SIZE = {!! MAX_IMAGE_UPLOAD_SIZE !!}; //BK
    const MAX_FILE_UPLOAD_SIZE = {!! MAX_FILE_UPLOAD_SIZE !!}; //BK
    const IMAGE_TYPE_ACCEPT = '{!! IMAGE_TYPE_ACCEPT !!}'; //BK
    const SUBSCRIBE_LINK = '{!! route('frontend.subscribe.store') !!}';
</script>