<x-app-layout>    
    
    
    <div>
        you are logged in...
    </div>



@push('scripts')
<script>
    console.log('scripts called');
</script>
@endpush
</x-app-layout>