$(function(){
	$('[data-category]').on('click',editCategoryModal)
});

function editCategoryModal()
{
	$('#modalEditCategory').modal('show');
}