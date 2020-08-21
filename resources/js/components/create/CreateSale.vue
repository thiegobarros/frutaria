<template>
    <div class="card">
        <div class="card-header">Cadastrar Venda</div>

        <div class="card-body">
            <form @submit="submit" class="row">
                <div class="form-group col-lg-4">
                    <label for="client_id">Cliente</label>
                    <select class="form-control" id="client_id" name="client_id" v-model="client_id">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="fruit_id">Fruta</label>
                    <select class="form-control" id="fruit_id" name="fruit_id" v-model="fruit_id">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group col-lg-2">
                    <label for="quantidade_fruta">Quantidade da Fruta</label>
                    <input class="form-control" id="quantidade_fruta" name="quantidade_fruta" v-model="quantidade_fruta" placeholder="Qtd de Fruta">
                </div>
                <div class="form-group col-lg-2">
                    <label for="valor">Valor</label>
                    <input class="form-control" id="valor" name="valor" v-model="valor" placeholder="Valor da Venda">
                </div>
                <button class="btn btn-primary ml-3">Salvar</button>
            </form>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            client_id: '',
            fruit_id: '',
            quantidade_fruta: '',
            valor: ''
        }
    },
    methods: {
        submit(e) {
            e.preventDefault()
            axios.post('/sale', {
                client_id: this.client_id,
                fruit_id: this.fruit_id,
                quantidade_fruta: this.quantidade_fruta,
                valor: this.valor
            })
            .then(response => {
                console.log(response)
            })
            .catch(error => {
                console.log(error)
            })
        }
    }
}
</script>
