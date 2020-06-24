jQuery('#ppp-select').change(()=>{
    let selectedOption = jQuery('#ppp-select option:selected')
    let href = window.location.search.substr(1)
    let strArgs = href.split('&')
    let args = {}
    for (let arg of strArgs){
        let arr = arg.split('=')
        args[arr[0]] = arr[1]
    }
    args['posts_per_page'] = selectedOption.val()
    window.location.href = '?' + jQuery.param(args)
})