<div class="row" x-data="handler()">
    <div class="col">
        <table class="table table-bordered align-items-center table-sm">
            <thead class="thead-light">
            <tr class="text-uppercase">
                <th>#</th>
                <th>{{__('partner.opening_time')}}</th>
                <th>{{__('partner.closing_time')}}</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <template x-for="(field, index) in fields" :key="index">
                <tr>
                    <td x-text="index + 1"></td>
                    <td><input x-model="field.opening" type="time" name="opening[][opening]" class="form-control"></td>
                    <td><input x-model="field.closing" type="time" name="opening[][closing]" class="form-control"></td>
                    <td><input x-model="field.description" type="text" name="opening[][description]"
                               class="form-control"></td>
                    <td>
                        <div @click="removeField(index)">
                            @svg('heroicon-o-trash', 'text-danger')
                        </div>
                    </td>
                </tr>
            </template>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <button type="button" class="btn btn-primary w-100" @click="addNewField()">+ Add Row</button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<script>
    function handler() {
        return {
            fields: [],
            init() {
                this.addNewField();
            },
            addNewField() {
                this.fields.push({
                    opening: '',
                    closing: '',
                    description: '',
                });
            },
            removeField(index) {
                this.fields.splice(index, 1);
            }
        }
    }
</script>
