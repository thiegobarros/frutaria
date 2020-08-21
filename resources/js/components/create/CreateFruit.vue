<template>
    <div class="card">
        <div class="card-header">Cadastrar Fruta</div>

        <div class="card-body">
            <form @submit="submit" class="row">
                <div class="form-group col-lg-4">
                    <label for="nome">Nome</label>
                    <input class="form-control" id="nome" name="nome" v-model="nome" placeholder="Nome da Fruta">
                </div>
                <div class="form-group col-lg-2">
                    <label for="valor">Valor</label>
                    <input class="form-control" id="valor" name="valor" v-model="valor" placeholder="Valor da Fruta">
                </div>
                <div class="form-group col-lg-2">
                    <label for="quantidade">Quantidade</label>
                    <input class="form-control" id="quantidade" name="quantidade" v-model="quantidade" placeholder="Qtd da Fruta">
                </div>
                <div class="form-group col-lg-4">
                    <label for="data_validade">Data de Validade</label>
                    <input class="form-control" id="data_validade" name="data_validade" v-model="data_validade" placeholder="Data de Validade da Fruta">
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
            nome: '',
            valor: '',
            quantidade: '',
            data_validade: '',
        }
    },
    methods: {
        submit(e) {
            e.preventDefault()
            axios.post('/fruit', {
                nome: this.nome,
                valor: this.valor,
                quantidade: this.quantidade,
                data_validade: this.data_validade
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
