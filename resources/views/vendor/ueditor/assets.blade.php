<!-- 配置文件 -->
<script type="text/javascript" src="{{ cdn('vendor/ueditor/ueditor.config.js') }}"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{ cdn('vendor/ueditor/ueditor.all.js') }}"></script>
<script>
    window.UEDITOR_CONFIG.serverUrl = '{{ route(config('ueditor.route.name')) }}'
</script>