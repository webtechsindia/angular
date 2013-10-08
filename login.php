<form action="" ng-submit="login()">
    <div class="hero-unit">
         <div class="row">
           <p class="text-error">{{error}}</p>
         </div>
        
        <div class="row">
            <div class="span6">
                username 
            </div>
            <div class="span6">
                <input type="text" class="input-large" required ng-model="username" >{{username}}
            </div>
        </div>
        <div class="row">
            <div class="span6">
                password
            </div>
            <div class="span6">
                <input type="password" class="input-large"  required ng-model="password"></inpu>{{password}}
            </div>
        </div>    
        <div class="row">
            <div class="span12">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>

        </div>    
    </div>
</div>
</form>