<section class="docupl-wrap">
    <h3><span class="primary-bgr">Данни за документи предоставени от посредника</span></h3>
    <h6>
        <strong>Прикачени файлове</strong>
        <span class="sep-line "> | </span> <span class="nofileindex">няма</span></h6>
    </h6>
    <ul></ul>
    <p class="docupl">
        <button type="button" class="btn btn-primary">Добави</button>
        <input name="{{ isset($fileInpName) ?  $fileInpName : 'docs[]' }}" type="file" multiple class="form-control-file">
    </p>
    &nbsp;
    <p class="resetp"><button type="button" class="btn btn-danger">Изчисти избраните файлове</button></p>
</section>
<style>
    section.docupl-wrap > p.docupl,
    section.docupl-wrap > p.resetp {
        position: relative;
        display: inline-block;
    }
    section.docupl-wrap > p.docupl > input.form-control-file {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        display: block;
        position: absolute;
        opacity: 0;
    }
    section.docupl-wrap > ul {
        list-style-type: none;
    }
    section.docupl-wrap > ul span.docname{
        font-weight: bold;
    }
</style>
<script>
    jQuery(function ($) {
        var $fileInpWrap = $('section.docupl-wrap');
        var $fileListNode = $('ul', $fileInpWrap);
        var noFilesNode = $('span.nofileindex', $fileInpWrap);
        var defText = $fileListNode.text();

        $fileInpWrap.on('change', 'p.docupl > input.form-control-file', function (e) {
            var files = e.target.files;
            if (files.length) {
                var fileNames = [];
                for (var i=0,len=files.length; i<len ; i++) {
                    fileNames.push(files[i].name)
                }
                noFilesNode.hide();
                addFileTypeDropdown($fileListNode, fileNames);
            } else {
                noFilesNode.show();
                $fileListNode.empty();
            }
        }).on('click', 'p.resetp > button', function (e) {
            var $fileInp = $('input.form-control-file', $fileInpWrap);
            var fileInpNode = $fileInp[0];
            $fileInp.val('');
            fileInpNode.type = '';
            fileInpNode.type = 'file';
            noFilesNode.show();
            $fileListNode.empty();
        });
        
        
        
        function addFileTypeDropdown($ul, fileNames) {
            var docTypes = @json($docTypes);
            var $listNodes = $();
            fileNames.forEach(function (name,i) {
                var $label = $('<label>', {'for': 'docselect'+i, html: 'файл: &nbsp;'});
                var $nameNode = $('<span>', {'class': 'docname' ,text: name});
                var $dropdownNode = buildDropdown(docTypes, 'doctypes[]', 'description', 'id');
                $dropdownNode.attr('id', 'docselect'+i);
                $listNodes = $listNodes.add($('<li>', {html: [$label, $nameNode, $dropdownNode, '<br/><br/>']}));
            });

            $ul.html($listNodes);
        }

        function buildDropdown(options, dropDownName, textProp, valProp) {
            var dropdownNodes = [
                $('<option>', {text: '-', value: ''})
            ];
            options.forEach(function (opt) {
                var $optNode = $('<option>', {text: opt[textProp], value: opt[valProp]});
                dropdownNodes.push($optNode);
            });

            return $('<select>', {name: dropDownName, 'class': 'custom-select', html: dropdownNodes, required: true});
        }
    });
</script>
